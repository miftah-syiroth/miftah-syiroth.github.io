<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::welcome')->name('welcome');

Route::prefix('english-education')->group(function(){
    Route::livewire('/', 'pages::english-education.index')->name('english-education.index');
});

Route::prefix('social-humanities')->group(function(){
    Route::livewire('/', 'pages::social-humanities.index')->name('social-humanities.index');
});


