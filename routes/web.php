<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;


Route::get('/index', [PostController::class, 'index'])->name('index');
Route::get('/register', [AuthController::class, 'registerform'])->name('registerForm');
Route::get('/login', [AuthController::class, 'loginform'])->name('loginForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/edit/:id', [AuthController::class, 'edit']);
Route::post('/update/:id', [AuthController::class, 'update']);
Route::get('/show-post/{id}', [PostController::class, 'show'])->name('show-post');
Route::post('/create-post', [PostController::class, 'store'])->name('create-post');
Route::put('/edit-post/{id}', [PostController::class, 'update'])->name('edit-post');
Route::get('/all-posts', [PostController::class, 'allposts'])->name('all-posts');
Route::get('/my-profile', [UserController::class, 'myProfile'])->name('my-profile');
