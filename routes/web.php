<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/admin', [GalleryController::class, 'admin'])->name('gallery.admin');
Route::post('/admin', [GalleryController::class, 'store'])->name('gallery.store');
Route::delete('/gallery/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');