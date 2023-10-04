<?php

use App\Http\Controllers\Api\V1\Provider\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

# TODO Make Guard (Provider) If Need
Route::prefix("auth")->group(function () {
    Route::middleware(["auth:sanctum"])->group(function () {
        Route::post('resend-otp', [AuthController::class, 'resendOTP']);
        Route::post('verify-otp', [AuthController::class, 'verifyOTP']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('profile', [AuthController::class, 'profile']);
        Route::post('change-mobile', [AuthController::class, 'changeMobile']);
        Route::post('chang-password', [AuthController::class, 'changePassword']);
        Route::post('reset-password', [AuthController::class, 'resetPassword']);
        Route::delete('delete-account',[AuthController::class,'deleteAccount']);
    });
        Route::post('login',[AuthController::class,'login']);
        Route::post('logout',[AuthController::class,'logout']);
        Route::post('register', [AuthController::class, 'register']);
        Route::post('send-otp', [AuthController::class, 'sendOTP']);
        Route::post('forget-password', [AuthController::class, 'forgetPassword']);
});

Route::middleware(["auth:sanctum"])->group(function () {

    # Chat
    include __DIR__.'/chat.php';

});

