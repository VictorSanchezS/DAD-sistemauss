<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('cms.blog');
});

Route::get('/event', function () {
    return view('cms.event');
});

Route::get('/galery', function () {
    return view('cms.galery');
});

Route::resource('categories',CategoryController::class);