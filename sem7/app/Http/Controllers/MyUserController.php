<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;

class MyUserController extends Controller
{
    public function index()
    {
        return view('userList', ['myUsers' => MyUser::all()]);
    }
    public function get(Request $request, $id)
    {
        $user = MyUser::where('id', '=', $id)->first();
        return view('userForm', ['myUser' => $user]);
    }

    public function addUser()
    {
        return view('userForm');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'email' => 'required|regex:/^.+@.+$/i'
        ]);
        MyUser::create($request->all());
        return redirect()->to(route('listUsers'));
    }

    public function remove(Request $request, $id)
    {
        MyUser::where('id', '=', $id)->first()->delete();
        return redirect(route('listUsers'));
    }
}
