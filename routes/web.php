<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', [GalleryController::class, 'index']);
Route::post('/upload', [GalleryController::class, 'store'])->name('photos.store');
