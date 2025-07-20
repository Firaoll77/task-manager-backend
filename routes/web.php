<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

// Define a named route for creating a post
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

// Define a named route for storing a post
Route::post('/post', [PostController::class, 'store'])->name('post.store');


?>
