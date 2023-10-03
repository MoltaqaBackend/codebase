<?php

namespace App\Http\Controllers\Api\V1\Provider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\ChangeMobileRequest;
use App\Http\Requests\Api\Auth\ChangePasswordRequest;
use App\Http\Requests\Api\Auth\ForgetPasswordRequest;
use App\Http\Requests\Api\Auth\LoginProviderRequest;
use App\Http\Requests\Api\Auth\RegisterProviderRequest;
use App\Http\Requests\Api\Auth\ResetPasswordRequest;
use App\Http\Requests\Api\Auth\SendOTPRequest;
use App\Http\Requests\Api\Auth\VerifyOTPRequest;
use App\Http\Resources\Api\Auth\ProviderResource;
use App\Services\Auth\AuthProviderService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group App Provider
 * Manage Provider App Apis
 * 
 * @subGroup Auth
 * @subgroupDescription Auth Cycle Apis
 */
class AuthController extends Controller
{
    private $authProviderService;

    public function __construct(AuthProviderService $authProviderService)
    {
        $this->authProviderService = $authProviderService;
    }

    /**
     * Provider Login.
     * 
     * an API which Offers a mean to login a provider
     * @unauthenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function login(LoginProviderRequest $request):JsonResponse
    {
        return apiSuccess(
            new ProviderResource(
                $this->authProviderService->login($request,providerAbilities())
            ),[],[],__('Logged in Successfully'));
    }

    /**
     * Provider Register.
     * 
     * an API which Offers a mean to register a new Provider
     * @unauthenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function register(RegisterProviderRequest $request): JsonResponse
    {
        return apiSuccess(
            new ProviderResource(
                $this->authProviderService->register($request,providerAbilities())
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
        return apiSuccess(["verification_code" => $this->authProviderService->sendOTP($request)->OTP],[],[], __("Verification Code Sent"));
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
        return apiSuccess(["verification_code" => $this->authProviderService->resendOTP($request)->OTP],[],[], __("Verification Code Resent"));
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
        return $this->authProviderService->verifyOTP($request);
    }

    /**
     * Provider New Password.
     * 
     * an API which Offers a mean to set new password for logged out providers after verification step.  
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function resetpassword(ResetPasswordRequest $request):JsonResponse
    {
        return $this->authProviderService->resetPassword($request,providerAbilities());
    }

    /**
     * Provider Change Password.
     * 
     * an API which Offers a mean to Change password for logged in Provider.  
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function changePassword(ChangePasswordRequest $request): JsonResponse
    {
        return $this->authProviderService->changePassword($request,providerAbilities());
    }

    /**
     * Provider Forget Password.
     * 
     * an API which Offers a mean to reset Provider password for logged out Provideres. 
     * @unauthenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function forgetPassword(ForgetPasswordRequest $request): JsonResponse
    {
        return apiSuccess(
            new ProviderResource(
                $this->authProviderService->forgetPassword($request,providerAbilities())
            ),[],[],__('Proccessed Successfully'));
    }

    /**
     * Provider Change Mobile.
     * 
     * an API which Offers a mean to change Provider mobile number. 
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function changeMobile(ChangeMobileRequest $request): JsonResponse
    {
        return apiSuccess(
            new ProviderResource(
                $this->authProviderService->changeMobile($request)
            ),[],[],__('Changed Successfully'));
    }

    /**
     * Provider Profile.
     * 
     * an API which Offers a mean to login a Provider
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function profile(Request $request): JsonResponse
    {
        return apiSuccess(
            new ProviderResource(
                $this->authProviderService->profile($request)
            ),[],[],__('Data Found'));
    }

    /**
     * Provider logout.
     * 
     * an API which Offers a mean to logout a Provider
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function logout(Request $request)
    {
        $this->authProviderService->logout($request);
        return apiSuccess(
            array()
            ,[],[],__('Logged out Successfully'));
    }

    /**
     * Provider Delete Account.
     * 
     * an API which Offers a mean to delete a Provider account
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function deleteAccount(Request $request): JsonResponse
    {
        return $this->authProviderService->deleteAccount($request);
    }
}
