<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $employes = Employee::all();
    return view('employesList', ['employes'=>$employes]);
})->name('homePage');


Route::get('/employee-form', [EmployeeController::class, 'index']);
Route::post('/employee-form', [EmployeeController::class, 'store']);
Route::get('/employee-form/{id}', [EmployeeController::class, 'update']);
Route::put('/employee-form/{id}', [EmployeeController::class, 'update']);
Route::get('/employee-form/{id}/remove', [EmployeeController::class, 'remove']);

Route::post('/jsonDecode', [EmployeeController::class, 'jsonDecode']);
