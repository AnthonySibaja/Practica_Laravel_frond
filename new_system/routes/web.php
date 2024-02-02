<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post');
