<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('imageUpload');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);
        // $request->image->storeAs('images', $imageName);

        /* 
            Write Code Here for
            Store $imageName name in DATABASE from HERE 
        */

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }
}