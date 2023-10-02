<?php

use App\Classes\AbilitiesConstant;
use App\Http\Controllers\Api\AppProvider\Auth\AuthProviderController;
use App\Http\Controllers\Api\AppProvider\Home\HomeProviderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Provider App API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your Provider application.
|
*/

// **provider**
Route::prefix("provider")
->group(function () {
    // **Auth**
    Route::prefix("auth")
        ->group(function () {
            Route::post('login',[AuthProviderController::class,'login']);
            Route::post('logout',[AuthProviderController::class,'logout']);
            Route::post('register', [AuthProviderController::class, 'register']);
            Route::post('send-otp', [AuthProviderController::class, 'sendOTP']);
            Route::post('resend-otp', [AuthProviderController::class, 'resendOTP'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::PROVIDER]);
            Route::post('verify-otp', [AuthProviderController::class, 'verifyOTP'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::PROVIDER]);
            Route::post('logout', [AuthProviderController::class, 'logout'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::PROVIDER]);
            Route::get('profile', [AuthProviderController::class, 'profile'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::PROVIDER]);
            Route::post('chang-mobile', [AuthProviderController::class, 'changeMobile'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::PROVIDER]);
            // Route::post('edit-profile', [AuthProviderController::class, 'edit'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::PROVIDER]);
            // Route::post('location', [AuthProviderController::class, 'location'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::PROVIDER]);
            // Route::post('updatecmtoken', [AuthProviderController::class, 'updateCMUUID'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::PROVIDER]);
            Route::post('chang-password', [AuthProviderController::class, 'changePassword'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::PROVIDER]);
            Route::post('forget-password', [AuthProviderController::class, 'forgetPassword']);
            Route::post('reset-password', [AuthProviderController::class, 'resetPassword'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::PROVIDER]);
            // Route::post('validate', [AuthProviderController::class, 'validateMobileorEmail']);
            // Route::post('refresh-token', [AuthProviderController::class, 'refreshToken']);
            Route::delete('delete-account',[AuthProviderController::class,'deleteAccount'])->middleware(['auth:sanctum','ability:'.AbilitiesConstant::PROVIDER]);
        });
});