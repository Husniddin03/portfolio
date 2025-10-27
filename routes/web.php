<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuoteController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
foreach(Post::all('title') as $title){
    Route::get('post/{name}', [PageController::class, 'post'])->name('post');
}

Route::middleware(['auth'])->group(function () {

    // Hamma login foydalanuvchilar kirishi mumkin bo'lgan yo'llar
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('addComment/{id}', [PageController::class, 'addComment'])->name('addComment');
    Route::post('message', [PageController::class, 'message'])->name('message');

    // Faqat admin foydalanuvchilar uchun
    Route::middleware(['role:admin'])->group(function () {
        Route::get('blog/add/{id}', [BlogController::class, 'add'])->name('blog.add');
        Route::resource('files', FileController::class)->only(['index', 'create', 'store', 'destroy']);
        Route::resource('blog', BlogController::class);
        Route::resource('quotes', QuoteController::class)->only(['index', 'create', 'store', 'destroy']);
    });
});




Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('writeRegister', [LoginController::class, 'writeRegister'])->name('writeRegister');
Route::post('checklogin', [LoginController::class, 'checklogin'])->name('checklogin');
