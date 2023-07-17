<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        return view('table', ['employees' => $employee]);
    }

    public function store(request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->save();
        return redirect()->route('employee.index');
    }
}