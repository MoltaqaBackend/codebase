<?php

use App\Http\Controllers\Api\V1\Transaction\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

# Payment Routes
Route::controller(PaymentController::class)
    ->prefix('payment')
    ->as('payment.')->group(function () {
        Route::any('/create-invoice', 'createInvoice')->name('create-invoice');
        Route::any('/callback-pay-invoice', 'callbackPayInvoice')->name('callback-pay-invoice');
});


Route::get('/', function () {
    return view('welcome');
});
