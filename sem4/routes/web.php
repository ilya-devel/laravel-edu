<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = [
        ['name' => 'user 1', 'age' => 20, 'position' => 'position 1', 'address' => 'address 1'],
        ['name' => 'user 2', 'age' => 14, 'position' => 'position 2', 'address' => 'address 2'],
        ['name' => 'user 3', 'age' => 32, 'position' => 'position 3', 'address' => 'address 3'],
        ['name' => 'user 4', 'age' => 27, 'position' => 'position 4', 'address' => 'address 4'],
        ['name' => 'user 5', 'age' => 17, 'position' => 'position 5', 'address' => 'address 5'],
        ['name' => 'user 6', 'age' => 18, 'position' => 'position 6', 'address' => 'address 6'],
    ];
    return view('home', ['users' => $users]);
});

Route::get('/contacts', function () {
    $contacts = [
        ['phone' => '+79996667770', 'email' => 'example@mail.com', 'post_code' => '666777', 'address' => 'address 1'],
        ['phone' => '+79996667770', 'email' => '', 'post_code' => '666777', 'address' => 'address 2'],
        ['phone' => '+79996667770', 'email' => 'example@mail.com', 'post_code' => '666777', 'address' => 'address 3'],
    ];
    return view('contacts', ['contacts' => $contacts]);
});

