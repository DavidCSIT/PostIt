<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return redirect('/posts'); });


// Route::resource('posts', PostController::class);
Route::resource('posts', PostController::class)->only(['index','show','create']);
Route::resource('posts', PostController::class)->only(['store','edit','store','update','destroy'])->middleware('auth');

require __DIR__.'/auth.php';
