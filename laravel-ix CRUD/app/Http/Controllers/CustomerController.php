<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('table', ['data' => $customers]);
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $data)
    {
        $customer = new Customer;
        $customer->name = $data->name;
        $customer->email = $data->email;
        $customer->save();
        return $this->index();
    }

    public function edit($id)
    {
        echo $id;
    }
}