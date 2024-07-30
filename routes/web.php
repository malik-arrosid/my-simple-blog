<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/edit/{id}', [PostController::class, 'update'])->name('posts.update');
Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('posts.destroy');