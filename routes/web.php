<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('post.create');
});

Route::post('/add', [PostController::class, 'add']);

Route::get('/show', [PostController::class , 'show']);

Route::delete('/delete/{id}', [PostController::class , 'delete']);

Route::post('/edit/{id}', [PostController::class , 'edit']);

Route::post('/update/{id}' ,[ PostController::class , 'update']);


