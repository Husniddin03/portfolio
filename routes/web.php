<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('myblog/{id}', [PageController::class, 'myblog'])->name('myblog');

Route::get('blog/add/{id}', [BlogController::class, 'add'])->name('blog.add');
Route::resource('files', FileController::class)->only(['index', 'create', 'store', 'destroy']);
Route::resource('blog', BlogController::class);
Route::resource('quotes', QuoteController::class)->only(['index', 'create', 'store', 'destroy']);


