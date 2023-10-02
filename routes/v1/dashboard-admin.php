<?php

use App\Classes\AbilitiesConstant;
use App\Http\Controllers\Api\Dashboard\Auth\AuthAdminController;
use App\Http\Controllers\Api\Dashboard\Core\CoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin App API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your Admin Dashboard.
|
*/

// **Admin**
Route::prefix("admin")
->group(function () {
    // **Core**
    Route::prefix('core')
        ->middleware(["auth:sanctum", "ability:".AbilitiesConstant::ADMIN])
        ->group(function(){
            Route::get('check-abilities' ,[CoreController::class,'checkAbilities']);
            Route::get('check-ability/{module}/{ability}' ,[CoreController::class,'checkAbility']);
        });
    // **Auth**
    Route::prefix("auth")
        ->group(function () {
            Route::post('login',[AuthAdminController::class,'login']);
            Route::post('logout',[AuthAdminController::class,'logout']);
            // Route::post('register', [AuthAdminController::class, 'register']);
            Route::post('send-otp', [AuthAdminController::class, 'sendOTP']);
            Route::post('resend-otp', [AuthAdminController::class, 'resendOTP'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::ADMIN]);
            Route::post('verify-otp', [AuthAdminController::class, 'verifyOTP'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::ADMIN]);
            Route::post('logout', [AuthAdminController::class, 'logout'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::ADMIN]);
            Route::get('profile', [AuthAdminController::class, 'profile'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::ADMIN]);
            // Route::post('edit-profile', [AuthAdminController::class, 'edit'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::ADMIN]);
            Route::post('changpassword', [AuthAdminController::class, 'changePassword'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::ADMIN]);
            Route::post('forget-password', [AuthAdminController::class, 'forgetPassword']);
            Route::post('reset-password', [AuthAdminController::class, 'resetPassword'])->middleware(["auth:sanctum", "ability:".AbilitiesConstant::ADMIN]);
            Route::delete('delete-account',[AuthAdminController::class,'deleteAccount'])->middleware(['auth:sanctum','ability:'.AbilitiesConstant::ADMIN]);
        });
});
