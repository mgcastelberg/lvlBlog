<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

// Route::get('post', function () {
//     return 'hola mundo';
// })->name('post.index');

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('posts', PostController::class);
