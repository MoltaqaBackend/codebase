<?php

namespace App\Http\Controllers\Api\V1\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\ChangeMobileRequest;
use App\Http\Requests\Api\Auth\ChangePasswordRequest;
use App\Http\Requests\Api\Auth\ForgetPasswordRequest;
use App\Http\Requests\Api\Auth\LoginClientRequest;
use App\Http\Requests\Api\Auth\RegisterClientRequest;
use App\Http\Requests\Api\Auth\ResetPasswordRequest;
use App\Http\Requests\Api\Auth\SendOTPRequest;
use App\Http\Requests\Api\Auth\VerifyOTPRequest;
use App\Http\Resources\Api\Auth\ClientResource;
use App\Services\Auth\AuthClientService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group App Client
 * Manage Client App Apis
 * 
 * @subGroup Auth
 * @subgroupDescription Auth Cycle Apis
 */
class AuthController extends Controller
{
    private $authClientService;

    public function __construct(AuthClientService $authClientService)
    {
        $this->authClientService = $authClientService;
    }

    /**
     * Client Login.
     * 
     * an API which Offers a mean to login a client
     * @unauthenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function login(LoginClientRequest $request): JsonResponse
    {
        return apiSuccess(
            new ClientResource(
                $this->authClientService->login($request,clientAbilities())
            ),[],[],__('Logged in Successfully'));
    }

    /**
     * Client Register.
     * 
     * an API which Offers a mean to register a new client
     * @unauthenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function register(RegisterClientRequest $request): JsonResponse
    {
        return apiSuccess(
            new ClientResource(
                $this->authClientService->register($request,clientAbilities())
            ),[],[],__('Registered Successfully'));
    }
    /**
     * Send OTP To Mobile Number.
     * 
     * an API which Offers a mean to Send OTP To Mobile Number. 
     * @unauthenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function sendOTP(SendOTPRequest $request): JsonResponse
    {
        return apiSuccess(["verification_code" => $this->authClientService->sendOTP($request)->OTP],[],[], __("Verification Code Sent"));
    }

    /**
     * Re-Send OTP.
     * 
     * an API which Offers a mean to Re-Send OTP. 
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function resendOTP(Request $request): JsonResponse
    {
        return apiSuccess(["verification_code" => $this->authClientService->resendOTP($request)->OTP],[],[], __("Verification Code Resent"));
    }

    /**
     * OTP Verification.
     * 
     * an API which Offers a mean to verify user otp
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function verifyOTP(VerifyOTPRequest $request): JsonResponse
    {
        return $this->authClientService->verifyOTP($request);
    }

    /**
     * Client New Password.
     * 
     * an API which Offers a mean to set new password for logged out clients after verification step.  
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function resetpassword(ResetPasswordRequest $request):JsonResponse
    {
        return $this->authClientService->resetPassword($request,clientAbilities());
    }

    /**
     * Client Change Password.
     * 
     * an API which Offers a mean to Change password for logged in client.  
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function changePassword(ChangePasswordRequest $request): JsonResponse
    {
        return $this->authClientService->changePassword($request,clientAbilities());
    }

    /**
     * Client Forget Password.
     * 
     * an API which Offers a mean to reset client password for logged out clients. 
     * @unauthenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function forgetPassword(ForgetPasswordRequest $request): JsonResponse
    {
        return apiSuccess(
            new ClientResource(
                $this->authClientService->forgetPassword($request,clientAbilities())
            ),[],[],__('Proccessed Successfully'));
    }

    /**
     * Client Change Mobile.
     * 
     * an API which Offers a mean to change client mobile number. 
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function changeMobile(ChangeMobileRequest $request): JsonResponse
    {
        return apiSuccess(
            new ClientResource(
                $this->authClientService->changeMobile($request)
            ),[],[],__('Changed Successfully'));
    }

    /**
     * Client Profile.
     * 
     * an API which Offers a mean to login a client
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function profile(Request $request): JsonResponse
    {
        return apiSuccess(
            new ClientResource(
                $this->authClientService->profile($request)
            ),[],[],__('Data Found'));
    }

    /**
     * Client logout.
     * 
     * an API which Offers a mean to logout a client
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function logout(Request $request)
    {
        $this->authClientService->logout($request);
        return apiSuccess(
            array()
            ,[],[],__('Logged out Successfully'));
    }

    /**
     * Client Delete Account.
     * 
     * an API which Offers a mean to delete a client account
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function deleteAccount(Request $request): JsonResponse
    {
        return $this->authClientService->deleteAccount($request);
    }
}
