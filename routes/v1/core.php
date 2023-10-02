<?php

use App\Http\Controllers\Api\Core\CoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Client App API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your client application.
|
*/

// **Core**
Route::prefix("core")
    ->middleware('auth.optional')
    ->group(function () {
        Route::prefix("notifications")
            ->middleware('auth:sanctum')
            ->withoutMiddleware('auth.optional')
            ->group(function () {
                Route::get('list',[CoreController::class,'notifications']);
                Route::get('mark-read',[CoreController::class,'notificationsMarkRead']);
            });
    });