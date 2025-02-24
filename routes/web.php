<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/groups', function () {
        return view('groups'); // Nome do arquivo Blade onde está o layout
    })->name('groups');
    Route::get('/flags', function () {
        return view('flags'); // Nome do arquivo Blade onde está o layout
    })->name('flags');
    Route::get('/units', function () {
        return view('units'); // Nome do arquivo Blade onde está o layout
    })->name('units');
    Route::get('/employee', function () {
        return view('employee'); // Nome do arquivo Blade onde está o layout
    })->name('employee');
})

;
