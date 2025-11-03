<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/', 'home')->name('home');
Route::view('/work', 'sections.work')->name('work');
Route::view('/about', 'sections.about')->name('about');
Route::view('/services', 'sections.services')->name('services');
Route::view('/blog', 'sections.blog')->name('blog');
Route::view('/contact', 'sections.contact')->name('contact');
