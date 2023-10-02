<?php

use App\Http\Controllers\Api\Dev\DevController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Client App API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your client application.
|
*/

// **Dev**
if(env('APP_ENV') != 'production')
Route::prefix('dev')
    ->group(function () {
        Route::post('static-mobile-otp',[DevController::class,'staticMobileOTP']);
        Route::post('static-mail-otp',[DevController::class,'staticEmailOTP']);
    });