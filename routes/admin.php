<?php

use Illuminate\Support\Facades\Route;

Route::get('post', function () {
    return 'hola mundo';
})->name('post.index');
