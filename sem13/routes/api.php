<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'hello'
    ]);
});

Route::apiResource('products', \App\Http\Controllers\ProductController::class);
