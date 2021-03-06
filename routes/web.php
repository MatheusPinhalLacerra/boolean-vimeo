<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerVimeo;

use App\Http\Controllers\ControllerFila;
use App\Jobs\vimeoRow;

use App\Jobs\vimeoRow;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/upload/fila', [ControllerFila::class, 'create'])->name('upload-com-fila');

Route::post('/videos/upload/fila', [ControllerFila::class, 'store'])->name('video-upload-fila.store');

Route::get('/video/create', [ControllerVimeo::class, 'create'])->name('upload-sem-fila');

Route::post('/videos/upload', [ControllerVimeo::class, 'store'])->name('video-upload.store');

Route::get('vimeo-row', function () {
    vimeoRow::dispatch();

    return redirect('/');
});
