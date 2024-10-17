<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('index');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');
Route::get('/product', function () {
    return view('product');
})->name('product');
Route::get('/contact', function () {
    return view('contact-us');
})->name('contact-us');
