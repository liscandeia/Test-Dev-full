<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Models\Unit;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $activeEmployees = Employee::count();
        $activeUnits = Unit::count();
        return view('dashboard', compact('activeEmployees', 'activeUnits'));
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
    Route::get('/employee-report', function () {
        return view('employee-report'); // Nome do arquivo Blade onde está o layout
    })->name('employee-report');
    Route::get('/audit', function () {
        return view('audit'); // Nome do arquivo Blade onde está o layout
    })->name('audit');
})

;
