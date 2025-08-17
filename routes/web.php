<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::controller(GuestController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/instalaciones', 'instalaciones')->name('instalaciones');
    Route::get('/eventos', 'eventos')->name('eventos');
    Route::get('/historia', 'historia')->name('historia');
    Route::get('/galeria', 'galeria')->name('galeria');
    Route::get('/contactanos', 'contactanos')->name('contactanos');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('member.dashboard');
    })->name('dashboard');
});