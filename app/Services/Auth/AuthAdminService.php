<?php

namespace App\Services\Auth;

use App\Exceptions\Api\Auth\AuthException;
use App\Http\Requests\Api\Auth\ForgetPasswordDashboardRequest;
use App\Http\Requests\Api\Auth\LoginDashboardRequest;
use App\Http\Requests\Api\Auth\RegisterAdminRequest;
use App\Services\Auth\AuthAbstract;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class AuthAdminService extends AuthAbstract
{
    public function __construct()
    {
        parent::__construct(new User());
    }

    /**
     * Login
     */
    public function login(FormRequest $request, $abilities = null)
    {
        if (!($request instanceof LoginDashboardRequest)) {
            throw AuthException::wrongImplementation(['wrong_implementation' => [__('Wrong Implementation')]]);
        }

        $request->authenticate();
        $user = $request->user();

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

    /**
     * forget password.
     *
     * @return JsonResponse
     */
    public function forgetPassword(FormRequest $request, $abilities = null): JsonResponse
    {
        if (!($request instanceof ForgetPasswordDashboardRequest)) {
            throw AuthException::wrongImplementation(['wrong_implementation' => [__('Wrong Implementation')]]);
        }

        $user = $this->model::whereEmail($request->email)->first();
        if (is_null($user)) {
            throw AuthException::userNotFound(['unauthorized' => [__("Unauthorized")]]);
        }
        tap($user)->update([
            'email_verified_at' => NULL,
        ])->fresh();
        $user->access_token = is_null($user->currentAccessToken()) ? $user->createToken('snctumToken', $abilities ?? [],now()->addHours(1))->plainTextToken : $user->currentAccessToken();
        return $this->handelOTPMethod($user);
    }

    public function register(FormRequest $request, $abilities = null): User
    {
        if (!($request instanceof RegisterAdminRequest)) {
            throw AuthException::wrongImplementation('wrong_implementation**' . __("Failed Operation"));
        }

        $data = $request->validated();
        $user = User::create($data);
        if (!$user->wasRecentlyCreated) {
            throw AuthException::userFailedRegistration('genration_failed**' . __("Failed Operation"));
        }
        $user->access_token = $user->createToken('snctumToken', $abilities ?? [], now()->addHours(1))->plainTextToken;
        return $this->handelMailOTP($user);
    }
}
