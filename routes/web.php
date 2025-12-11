<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RendererController;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/post', [RendererController::class, 'index'])->name('posts.index');
