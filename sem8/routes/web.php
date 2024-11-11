<?php

use App\Models\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logs', function () {
    $logs = Log::all();
    return view('logsData', ['logs' => $logs]);
});
