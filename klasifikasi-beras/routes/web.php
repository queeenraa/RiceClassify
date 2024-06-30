<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\RiceController;

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', [RiceController::class, 'classify']);
