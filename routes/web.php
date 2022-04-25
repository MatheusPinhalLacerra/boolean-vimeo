<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerVimeo;
use App\Jobs\vimeoRow;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/video/create', [ControllerVimeo::class, 'create']);

Route::post('/videos/upload', [ControllerVimeo::class, 'store'])->name('video-upload.store');

Route::get('vimeo-row', function () {
    vimeoRow::dispatch();

    return redirect('/');
});
