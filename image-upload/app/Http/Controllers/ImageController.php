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
        $image_name = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image_name);
        return back()->with('success', 'Image Uploaded Successfuly')->with('image', $image_name);
    }
}