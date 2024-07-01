<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/productos', \App\Livewire\Productos\Index::class)->name('productos.index');
Route::get('/productos/create', \App\Livewire\Productos\Create::class)->name('productos.create');
Route::get('/productos/show/{producto}', \App\Livewire\Productos\Show::class)->name('productos.show');
Route::get('/productos/update/{producto}', \App\Livewire\Productos\Edit::class)->name('productos.edit');

// require __DIR__ . '/auth.php';
