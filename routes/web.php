<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerVimeo;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/video/create', [ControllerVimeo::class, 'create']);

Route::post('/videos/upload', [ControllerVimeo::class, 'store'])->name('video-upload.store');
