<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


Auth::routes();


Route::resource('posts', PostController::class);


Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');


Route::get('/', [PostController::class, 'index'])->name('home');