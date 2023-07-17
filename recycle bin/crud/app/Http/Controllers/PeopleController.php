<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index()
    {
        $users = DB::table('persons')->get();

        foreach ($users as $user) {
            echo $user->name;
        }
        // return view('table');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validator = validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'image' => 'sometimes|image:gif,png,jpeg,jpeg',
        ]);
        if ($validator->passes()) {
            // store data
            $person = new People();
            $person->name = $request->name;
            $person->email = $request->email;
            $person->save();
            // $request->session()->flash('success', 'Record added Successfully');
            return redirect()->route('person.index');
        } else {
            // show error
            return redirect()->route('person.create')->withErrors($validator)->withInput();
        }
    }
}