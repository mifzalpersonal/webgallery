<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class GalleryController extends Controller
{
    public function index() {
        $photos = Photo::all();
        return view('gallery', compact('photos'));
    }

    public function upload() {
        return view('upload');
    }

    public function store(Request $request) {
        $request -> validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|image|max:2048',
        ]);

    $path = $request->file('photo')->store('images', 'public');

    Photo::create([
        'title' => $request->title,
        'path' => $path
    ]);

    return redirect ('/gallery')->with('success', 'Foto berhasil diupload');

    }
}


   