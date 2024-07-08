<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/home', function () {
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/tour',[TourController::class,'index'])->name('tour.index');
Route::get('/tour/create',[TourController::class,'create'])->name('tour.create');
Route::post('/tour',[TourController::class,'store'])->name('tour.store');
Route::get('/tour/{tour}/edit',[TourController::class,'edit'])->name('tour.edit');
Route::put('/tour/{tour}',[TourController::class,'update'])->name('tour.update');
Route::delete('/tour/{tour}',[TourController::class,'destroy'])->name('tour.destroy');