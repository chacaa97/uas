<?php

use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/', App\Http\Controllers\PostController::class);
Route::get('post/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');