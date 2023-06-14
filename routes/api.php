<?php

use App\Http\Controllers\Api\TagController;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/tags/select2', function (Request $request) {
//     $terms = $request->term ?: '';
//     $tags = Tag::select('id','name as text')
//                 ->where('name', 'like','%'.$terms.'%')->get();

//     return $tags;

// })->name('tags.select2');

Route::apiResource('/tags', TagController::class)->names('api.tags');
