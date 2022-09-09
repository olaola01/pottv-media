<?php

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BaseController::class, 'home'])->name('home-page');

Route::get('/about-us', [BaseController::class,'about'])->name('about');

Route::get('/our-services', [BaseController::class,'services'])->name('services');

Route::get('/contact-us', [BaseController::class, 'contact'])->name('contact');

Route::post('save/messages', [BaseController::class, 'saveMessage'])->name('save.message');
