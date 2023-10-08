<?php

use App\Http\Controllers\Api\V1\Notification\NotificationController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'notification'], function () {
    Route::get('index', [NotificationController::class, 'index'])->name('notification.index');
    Route::post('store', [NotificationController::class, 'store'])->name('notification.store');
});
