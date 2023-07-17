<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('list', ['worker' => $employees]);
    }

    public function create()
    {
        return view('create_form');
    }
    public function store(request $data)
    {
        $employee = new Employee;
        $employee->name = $data->name;
        $employee->email = $data->email;
        $employee->save();
        return $this->index();
    }

    public function edit($id)
    {
        $employee = Employee::FindOrFail($id);
        // dd($employee);
        return view('edit', ['data' => $employee]);
        // return view('edit', ['worker' => $employee]);
    }

    public function update($id, Request $data)
    {
        $employee = Employee::find($id);
        $employee->name = $data->name;
        $employee->email = $data->email;
        $employee->save();
        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        // DB::table('posts')->where('id', 1)->delete();
        Employee::destroy($id);
        return redirect()->route('employees.index');
    }
}