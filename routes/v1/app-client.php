<?php

use App\Classes\AbilitiesConstant;
use App\Http\Controllers\Api\AppClient\Auth\AuthClientController;
use App\Http\Controllers\Api\AppClient\Home\HomeClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Client App API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your client application.
|
*/

// **client**
Route::prefix("client")
->group(function () {
    // **Auth**
    Route::prefix("auth")
        ->group(function () {
            Route::post('login',[AuthClientController::class,'login']);
            Route::post('logout',[AuthClientController::class,'logout']);
            Route::post('register', [AuthClientController::class, 'register']);
            Route::post('send-otp', [AuthClientController::class, 'sendOTP']);
            Route::post('resend-otp', [AuthClientController::class, 'resendOTP'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::CLIENT]);
            Route::post('verify-otp', [AuthClientController::class, 'verifyOTP'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::CLIENT]);
            Route::post('logout', [AuthClientController::class, 'logout'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::CLIENT]);
            Route::get('profile', [AuthClientController::class, 'profile'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::CLIENT]);
            Route::post('change-mobile', [AuthClientController::class, 'changeMobile'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::CLIENT]);
            // Route::post('edit-profile', [AuthClientController::class, 'edit'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::CLIENT]);
            // Route::post('location', [AuthClientController::class, 'location'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::CLIENT]);
            // Route::post('updatecmtoken', [AuthClientController::class, 'updateCMUUID'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::CLIENT]);
            Route::post('chang-password', [AuthClientController::class, 'changePassword'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::CLIENT]);
            Route::post('forget-password', [AuthClientController::class, 'forgetPassword']);
            Route::post('reset-password', [AuthClientController::class, 'resetPassword'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::CLIENT]);
            // Route::post('validate', [AuthClientController::class, 'validateMobileorEmail']);
            // Route::post('refresh-token', [AuthClientController::class, 'refreshToken']);
            Route::delete('delete-account',[AuthClientController::class,'deleteAccount'])->middleware(['auth:sanctum','ability:'.AbilitiesConstant::CLIENT]);
        });
});
