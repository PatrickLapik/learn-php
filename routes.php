<?php

use App\Controllers\PostsController;
use App\Controllers\PublicController;
use App\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/us', [PublicController::class, 'us']);
Route::get('/form', [PublicController::class, 'form']);
Route::post('/answer', [PublicController::class, 'answer']);
Route::get('/admin/posts', [PostsController::class, 'index']);
Route::get('/admin/posts/create', [PostsController::class, 'create']);
Route::post('/admin/posts', [PostsController::class, 'store']);
Route::get('/admin/posts/{id}', [PostsController::class, 'getById']);
Route::get('/admin/posts/edit/{id}', [PostsController::class, 'edit']);
Route::post('/admin/posts/edit/{id}', [PostsController::class, 'update']);
Route::get('/admin/posts/delete/{id}', [PostsController::class, 'destroy']);

