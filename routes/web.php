<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaymentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/paypal',function(){
    return view('myOrder');
});

// route for processing payment
Route::post('/paypal', [PaymentController::class, 'payWithpaypal'])->name('paypal');

// route for check status of the payment
Route::get('/status', [PaymentController::class, 'getPaymentStatus'])->name('status');
