<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // public function index()
    // {
    //     echo "Hello World";
    // }
    public function __invoke()
    {
        echo "Hello World";
    }
}
