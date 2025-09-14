<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Photo;

class GalleryController extends Controller
{
    public function index() {
        $photos = Photo::all();
        return view('gallery', compact('photos'));
    }

    public function admin() {
        $photos = Photo::all();
        return view('admin', compact('photos'));
    }

    public function store(Request $request) {

        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('photo')->store('photos', 'public');
        Photo::create(['path' => $path]);
        return redirect()->route('gallery.admin')->with('success', 'Foto berhasil diupload!');
    }

    public function delete($id) {
    
        $photo = Photo::findOrFail($id);
        Storage::disk('public')->delete($photo->path);
        $photo->delete();
        return redirect()->route('gallery.admin')->with('success', 'Foto berhasil dihapus!');
    }
        
    
}


   