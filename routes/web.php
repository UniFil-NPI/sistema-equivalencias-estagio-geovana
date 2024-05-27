<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::get('/disciplinas', \App\Livewire\Disciplinas\Index::class)->name('disciplinas.index');
    Route::get('/disciplinas/create', \App\Livewire\Disciplinas\Create::class)->name('disciplinas.create');
    Route::get('/disciplinas/show/{disciplina}', \App\Livewire\Disciplinas\Show::class)->name('disciplinas.show');
    Route::get('/disciplinas/update/{disciplina}', \App\Livewire\Disciplinas\Edit::class)->name('disciplinas.edit');

require __DIR__.'/auth.php';
