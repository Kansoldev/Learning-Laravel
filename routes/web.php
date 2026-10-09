<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    // return "About page";
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});