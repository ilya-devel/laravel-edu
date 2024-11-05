<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', [\App\Http\Controllers\TestController::class, 'index']);
Route::get('/test', \App\Http\Controllers\TestController::class);

Route::get('/users', [\App\Http\Controllers\UserController::class, 'showUsers']);
