<?php

namespace App\Services\Auth;

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
        $user = $this->model::whereEmail($request->email)->first();
        tap($user)->update([
            'email_verified_at' => NULL,
        ])->fresh();
        $user->access_token = is_null($user->currentAccessToken()) ? $user->createToken('snctumToken', $abilities ?? [],now()->addHours(1))->plainTextToken : $user->currentAccessToken();
        return $this->handelOTPMethod($user);
    }

    public function register(FormRequest $request, $abilities = null): User
    {
        $data = $request->validated();
        $user = User::create($data);
        $user->access_token = $user->createToken('snctumToken', $abilities ?? [], now()->addHours(1))->plainTextToken;
        return $this->handelMailOTP($user);
    }
}
