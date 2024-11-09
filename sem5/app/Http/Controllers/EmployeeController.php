<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('sendUserInfo');
    }

    public function store(Request $request)
    {
        EmployeeController::getPath($request);
        echo PHP_EOL;
        EmployeeController::getUrl($request);

        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->lastname = $request->input('lastname');
        $employee->description = $request->input('description');
        $employee->workData = $request->input('workData');
        $employee->jobPosition = $request->input('jobPosition');
        $employee->address = $request->input('address');
        $employee->save();
        return redirect()->route('homePage');
    }

    public function update(Request $request, $id)
    {
        EmployeeController::getPath($request);
        echo PHP_EOL;
        EmployeeController::getUrl($request);

        $employee = Employee::where('id', '=', $id)->first();
        if (empty($employee)) {
            return "User not found";
        }
        if ($request->method() == 'PUT') {
            $employee->name = $request->input('name');
            $employee->lastname = $request->input('lastname');
            $employee->description = $request->input('description');
            $employee->workData = $request->input('workData');
            $employee->jobPosition = $request->input('jobPosition');
            $employee->address = $request->input('address');
            $employee->save();
            return redirect()->route('homePage');
        } else {
            return view('sendUserInfo',['employee'=>$employee, 'method'=>'put']);
        }

    }

    public function remove($id)
    {
        Employee::where('id', '=', $id)->delete();
        return redirect()->route('homePage');
    }

    public function getPath(Request $request)
    {
        echo $request->path();
    }
    public function getUrl(Request $request)
    {
        echo $request->url();
    }

    public function jsonDecode(Request $request)
    {
        $someData = json_decode($request->input('jsonArea'));
        return response($someData)->header('Content-Type', 'application/json');
    }
}
