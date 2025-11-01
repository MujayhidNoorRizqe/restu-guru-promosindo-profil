<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/work', 'work')->name('work');
Route::view('/contact', 'contact')->name('contact');

