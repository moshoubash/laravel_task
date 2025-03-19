<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {return view('about');});

Route::get('/contact', function () {return view('contact');});

Route::get('/profile', function () {return view('profile');});

Route::get('/create_user', [UserController::class, 'create']);

// users section

Route::get('/users', [UserController::class, 'index']);

// handle creating process

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users', [UserController::class, 'store'])->name('users.store');