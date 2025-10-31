<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ShippingController;

Route::prefix('v1')->group(function () {
    Route::apiResource('products', ProductController::class);

    Route::apiResource('orders', OrderController::class)
        ->only(['index','show','store','destroy']);

    Route::post('cotizar-envio', [ShippingController::class, 'quote']);
});
