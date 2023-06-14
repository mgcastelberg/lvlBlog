<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\PostController;
use App\Http\Controllers\Panel\WelcomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', WelcomeController::class)->name('dashboard');
    Route::resource('/post', PostController::class)->names('panel.post')->only('index','show');
});
