<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('myblog', function () {
    return view('myblog');
});

Route::resource('blog', BlogController::class);