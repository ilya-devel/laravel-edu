<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', function() {
    for ($i=0; $i < 5; $i++) {
        $employee = new Employee();
        $employee->save();
    }
});
