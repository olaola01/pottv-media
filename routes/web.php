<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Frontend
Route::get('/', [BaseController::class, 'home'])->name('home-page');
Route::get('/about-us', [BaseController::class,'about'])->name('about');
Route::get('/our-services', [BaseController::class,'services'])->name('services');
Route::get('/contact-us', [BaseController::class, 'contact'])->name('contact');
Route::post('save/messages', [BaseController::class, 'saveMessage'])->name('save.message');
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Backend
Route::group(['prefix' => 'admin/pottv/backend-portal'], function () {
    // Auth
    Auth::routes(['register' => false]);

    // Admin
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::get('trashed/posts', [PostController::class, 'trashed'])->name('posts.trashed');
    Route::delete('restore/posts/{id}', [PostController::class, 'restore'])->name('posts.restore');
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
});



