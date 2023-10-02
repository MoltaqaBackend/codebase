<?php

use App\Classes\AbilitiesConstant;
use App\Classes\DashboardModulesActionsConstant;
use App\Classes\DashboardModulesConstant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Broadcast;
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

Route::prefix("v1")
    ->group(function () {
        Broadcast::routes(["middleware" => ["auth:sanctum"]]);
        
        require __DIR__.'/v1/app-client.php';

        require __DIR__.'/v1/app-provider.php';

        require __DIR__.'/v1/dashboard-admin.php';
        
        require __DIR__.'/v1/core.php';

        require __DIR__.'/v1/dev.php';
    });