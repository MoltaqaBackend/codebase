<?php

namespace App\Http\Controllers\Api\V1\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\ChangePasswordRequest;
use App\Http\Requests\Api\Auth\ForgetPasswordDashboardRequest;
use App\Http\Requests\Api\Auth\LoginDashboardRequest;
use App\Http\Requests\Api\Auth\ResetPasswordRequest;
use App\Http\Requests\Api\Auth\SendOTPRequest;
use App\Http\Requests\Api\Auth\VerifyOTPRequest;
use App\Http\Resources\Api\Auth\AdminResource;
use App\Services\Auth\AuthAdminService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group Dashboard Admin
 * Manage Dashboard Apis
 *
 * @subGroup Auth
 * @subgroupDescription Auth Cycle Apis
 */
class AuthController extends Controller
{
    private $authAdminService;

    public function __construct(AuthAdminService $authAdminService)
    {
        $this->authAdminService = $authAdminService;
    }

    /**
     * Admin Login.
     *
     * an API which Offers a mean to login a Admin
     * @unauthenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function login(LoginDashboardRequest $request): JsonResponse
    {
        return apiSuccess(
            new AdminResource(
                $this->authAdminService->login($request,adminAbilities())
            ),[],[],__('Logged in Successfully'));
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
        return apiSuccess(["verification_code" => $this->authAdminService->sendOTP($request)->OTP],[],[], __("Verification Code Sent"));
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
        return apiSuccess(["verification_code" => $this->authAdminService->resendOTP($request)->OTP],[],[], __("Verification Code Resent"));
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
        return $this->authAdminService->verifyOTP($request);
    }

    /**
     * Admin New Password.
     *
     * an API which Offers a mean to set new password for logged out Admins after verification step.
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function resetpassword(ResetPasswordRequest $request):JsonResponse
    {
        return $this->authAdminService->resetPassword($request,AdminAbilities());
    }

    /**
     * Admin Change Password.
     *
     * an API which Offers a mean to Change password for logged in Admin.
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function changePassword(ChangePasswordRequest $request): JsonResponse
    {
        return $this->authAdminService->changePassword($request,AdminAbilities());
    }

    /**
     * Admin Forget Password.
     *
     * an API which Offers a mean to reset Admin password for logged out Admins.
     * @unauthenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function forgetPassword(ForgetPasswordDashboardRequest $request): JsonResponse
    {
        return apiSuccess(
            new AdminResource(
                $this->authAdminService->forgetPassword($request,AdminAbilities())
            ),[],[],__('Proccessed Successfully'));
    }

    /**
     * Admin Profile.
     *
     * an API which Offers a mean to login a Admin
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function profile(Request $request): JsonResponse
    {
        return apiSuccess(
            new AdminResource(
                $this->authAdminService->profile($request)
            ),[],[],__('Data Found'));
    }

    /**
     * Admin logout.
     *
     * an API which Offers a mean to logout a Admin
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function logout(Request $request)
    {
        $this->authAdminService->logout($request);
        return apiSuccess(
            array()
            ,[],[],__('Logged out Successfully'));
    }

    /**
     * Admin Delete Account.
     *
     * an API which Offers a mean to delete an Admin account
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function deleteAccount(Request $request)
    {
        return $this->authAdminService->deleteAccount($request);
    }
}
