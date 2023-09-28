<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::view('/', 'welcome')->name('home');
Route::get('/contact', [PostController::class,'index'])->name('contact');