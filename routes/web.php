<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/casas', function () {
    return view('casas');
})->name('casas');

Route::get('/contactos', function () {
    return view('contactos');
})->name('contactos');

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('inicio');
    })->name('dashboard');
});
