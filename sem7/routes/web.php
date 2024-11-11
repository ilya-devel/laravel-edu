<?php

use App\Http\Controllers\MyUserController;
use App\Http\Controllers\PdfGeneratorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', [MyUserController::class, 'index'])->name('listUsers');
Route::get('/user/{id}', [MyUserController::class, 'get'])->name('getUser');
Route::get('/user/{id}/remove', [MyUserController::class, 'remove'])->name('removeUser');
Route::get('/user/add', [MyUserController::class, 'addUser'])->name('addUser');
Route::post('/user', [MyUserController::class, 'store'])->name('createUser');
Route::get('/pdf/{id?}', [PdfGeneratorController::class, 'index']);
