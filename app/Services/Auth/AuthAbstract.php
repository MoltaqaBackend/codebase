<?php

namespace App\Services\Auth;

use App\Enum\UserTypeEnum;
use App\Http\Requests\Api\Auth\ChangeMobileRequest;
use App\Http\Requests\Api\Auth\ChangePasswordRequest;
use App\Http\Requests\Api\Auth\ResetPasswordRequest;
use App\Http\Requests\Api\Auth\SendOTPRequest;
use App\Http\Requests\Api\Auth\VerifyOTPRequest;
use App\Models\AuthenticatableOtp;
use App\Traits\ApiResponseTrait;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\PersonalAccessToken;

abstract class AuthAbstract
{
    use ApiResponseTrait;

    protected bool $loginRequireSendOTP;
    public $model;

    public function __construct(User $model)
    {
        $this->loginRequireSendOTP = config('global.login_require_otp');
        $this->model = $model;
    }

    /**
     * Login
     */
    public function login(FormRequest $request, $abilities = null)
    {
        $request->authenticate();
        $user = $request->user();

        # TODO handel Cloud messaging
        $accessToken = $user->createToken('snctumToken', $abilities ?? [], now()->addMonths(3))->plainTextToken;

        if ($this->loginRequireSendOTP) {
            tap($user)->update([
                'email_verified_at' => NULL,
            ])->fresh();
            $user->access_token = $accessToken;
            return $this->handelOTPMethod($user);
        }
        $user->access_token = $accessToken;
        return $user;
    }

    public function sendOTP(SendOTPRequest $request)
    {
        $user = $this->model::query()->whereMobile($request->mobile)->first();
        $user->access_token = $request->bearerToken();
        return $this->handelOTPMethod($user);
    }

    public function resendOTP(Request $request)
    {
        $user = $request->user();
        $user->access_token = $request->bearerToken();
        return $this->handelOTPMethod($user);
    }

    /**
     * verify OTP.
     *
     * @return JsonResponse
     */
    public function verifyOTP(VerifyOTPRequest $request): JsonResponse
    {
        $user = $request->user()->loadMissing('latestOTPToken');
        if (is_null($user->latestOTPToken))
            return $this->respondWithSuccess(__("Failed Operation"));

        if ($request->code != $user->latestOTPToken->code) {
            return $this->setStatusCode(422)->respondWithError(__("Code Not Matched"),
                errors: ["code" => [__("Code Not Matched")]]);
        }

        if ($user->latestOTPToken?->isValid()) {
            $user->latestOTPToken->update([
                'active' => false,
            ]);
            $user->update([
                'email_verified_at' => now(),
            ]);
            return $this->respondWithSuccess(__("Successfull Operation"));
        }
        return $this->setStatusCode(422)->respondWithError(__("Code Expired"),
            errors: ["code" => [__("Code Expired")]]);
    }

    /**
     * forget password.
     *
     * @return JsonResponse
     */
    public function forgetPassword(FormRequest $request, $abilities = null)
    {
        $user = $this->model::whereMobile($request->mobile)->first();
        tap($user)->update([
            'email_verified_at' => NULL,
        ])->fresh();
        $user->access_token = is_null($user->currentAccessToken()) ? $user->createToken('snctumToken', $abilities ?? [], now()->addHours(1))->plainTextToken : $user->currentAccessToken();
        return $this->handelOTPMethod($user);
    }

    /**
     * change password
     *
     * @return JsonResponse
     */
    public function changePassword(ChangePasswordRequest $request, $abilities = null): JsonResponse
    {
        $user = $request->user();
        if (Hash::check($request->old_password, $user->password)) {

            $user->password = $request->password;
            $user->save();

            $user->currentAccessToken()->delete();

            $user->access_token = $user->createToken('snctumToken', $abilities ?? [], now()->addMonths(3))->plainTextToken;
            return $this->respondWithArray(array("access_token" => $user->access_token, 'message' => __('Password Changed Successfully')));
        } else {
            return $this->setStatusCode(422)->respondWithError(__("Current Password Wrong"));
        }
    }

    /**
     * reset password.
     *
     * @return JsonResponse
     */
    public function resetPassword(ResetPasswordRequest $request, $abilities = null): JsonResponse
    {
        $user = $request->user();
        $user->password = $request->password;
        $user->save();
        $user->currentAccessToken()->delete();
        $user->access_token = $user->createToken('snctumToken', $abilities ?? [], now()->addMonths(3))->plainTextToken;
        return $this->respondWithArray(array("access_token" => $user->access_token, 'message' => __('Password Reset Successfully')));
    }


    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
    }


    /**
     * change user mobile.
     *
     * @return User
     */
    public function changeMobile(ChangeMobileRequest $request)
    {
        $user = $request->user();
        tap($user)->update([
            'mobile' => $request->mobile,
        ])->fresh();
        $user->access_token = $request->bearerToken();
        return $this->handelOTPMethod($user);
    }

    public function profile(Request $request)
    {
        return $request->user();
    }


    protected function handelMobileOTP($user)
    {
        $user->loadMissing('latestOTPToken');
        $fixedOTPNumbers = json_decode(Storage::disk('local')->get('fixed_otp_numbers.json'), true);
        $fixedOTP = false;

        if (in_array($user->mobile, $fixedOTPNumbers)) {
            $fixedOTP = true;
        }
        $user->OTP = $fixedOTP ? "1234" : randomCode(4, 1);
        $message = __("otp_message", ['code' => $user->OTP]);
        $flag = sendSMS($message, $user->mobile);
        $user->sms = $flag;
        $user->OTPTokens()->save(new AuthenticatableOtp([
            'code' => $user->OTP,
        ]));
        return $user;
    }

    protected function handelMailOTP($user)
    {
        $user->loadMissing('latestOTPToken');
        $fixedOTPMails = json_decode(Storage::disk('local')->get('fixed_otp_emails.json'), true);
        $sendMail = false;
        $createRecord = false;
        $fixedOTP = false;

        if (!is_null($fixedOTPMails) && in_array($user->email, $fixedOTPMails)) {
            $fixedOTP = true;
        }


        if (is_null($user->latestOTPToken) || !$user->latestOTPToken->isValid()) {
            $user->OTP = $fixedOTP ? "1234" : randomCode(4, 1);
            $sendMail = true;
            $createRecord = true;
        } else {
            $user->OTP = $user->latestOTPToken?->code;
            $sendMail = true;
        }

        if ($sendMail) {
            $user->mailed = sendOtpMail($user->OTP, $user->email);
            if ($createRecord && $user->mailed) {
                $user->OTPTokens()->save(new AuthenticatableOtp([
                    'code' => $user->OTP,
                ]));
            }
        }

        return $user;
    }

    protected function handelOTPMethod($user)
    {
        $token = PersonalAccessToken::findToken($user->access_token);
        if (is_null($token)) {
            return false;
        }
        return $user->type == UserTypeEnum::ADMIN ? $this->handelMailOTP($user) : $this->handelMobileOTP($user);
    }

    public function deleteAccount(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();
        $user->delete();
        $this->respondWithSuccess(__('Deleted Successfully'));
    }

    abstract public function register(FormRequest $request, $abilities = null);
}
