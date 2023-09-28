<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::view('/', 'welcome')->name('home');
Route::get('/contact', [PostController::class,'index'])->name('contact');
Route::get('/agregar', [PostController::class,'agregar'])->name('agregar');
Route::post('/agregar', [PostController::class,'store'])->name('agregar.store');

Route::post('/editar', [PostController::class,'editar'])->name('editar');
Route::post('/eliminar', [PostController::class,'eliminar'])->name('eliminar');