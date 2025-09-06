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
}
