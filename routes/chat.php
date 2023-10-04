<?php

use App\Http\Controllers\Api\V1\Chat\ChatController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'chat'], function () {
    Route::get('chats', [ChatController::class, 'index'])->name('chats.index');
    Route::post('chats/show-chat', [ChatController::class, 'showChat'])->name('chats.get-chat');
    Route::post('chats/{chat}/send-message', [ChatController::class, 'sendMessage'])->name('chats.send-message');
});
