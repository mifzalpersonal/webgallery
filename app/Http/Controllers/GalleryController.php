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

    public function admin() {
        return view('admin');
    }

    public function store(Request $request) {

        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('photo')->store('photos', 'public');
        Photo::create(['path' => $path]);
        return redirect()->route('gallery.index')->with('success', 'Foto berhasil diupload!');
    }
}


   