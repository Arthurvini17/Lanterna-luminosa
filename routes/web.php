<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('livewire.home');
// });


Route::view("/", "livewire.welcome")->name("index.home");

Route::view('modal', 'modal')->name('modal');

