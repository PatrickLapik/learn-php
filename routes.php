<?php

use App\Controllers\PublicController;
use App\Controllers\PostsController;
use App\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/us', [PublicController::class, 'us']);
Route::get('/form', [PublicController::class, 'form']);
Route::post('/answer', [PublicController::class, 'answer']);
Route::get('/admin/posts', [PostsController::class, 'index']);
