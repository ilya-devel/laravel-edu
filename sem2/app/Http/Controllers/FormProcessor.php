<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('userforms');
    }

    public function store(Request $request)
    {
        $result = [
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'email'=>$request->input('email'),

        ];
        // return response()->json($result);
        return view('hello', ['result'=>$result]);
    }
}
