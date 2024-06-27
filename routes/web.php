<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/package', function () {
    return view('package');
});

Route::get('/book', function () {
    return view('book');
});
