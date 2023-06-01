<?php

use Illuminate\Support\Facades\Route;

Route::get('post', function () {
    return 'hola mundo';
})->name('post.index');

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');
