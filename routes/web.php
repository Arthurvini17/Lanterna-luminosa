<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('livewire.home');
// });


Route::view("/", "livewire.welcome")->name("index.home");

Route::view('modal', 'modal')->name('modal');


Route::get('/register', [UserController::class, 'register_index'])->name("register.index");

Route::post('/register', [UserController::class, 'register_create'])->name("register.create");

Route::get('/login', [UserController::class,'login_index'])->name('login.index');

Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    

