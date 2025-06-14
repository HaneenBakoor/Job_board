<?php

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::get('/posts',[PostController::class, 'index']);
// Route::get('/posts/{id}',[PostController::class, 'show']);

// Route::post('/posts',[PostController::class, 'store']);
// Route::put('/posts/{id}',[PostController::class, 'update']);
// Route::delete('/posts/{id}',[PostController::class, 'destroy']);
Route::apiResource('posts',PostController::class)->except(['destroy']);
Route::apiResource('tags',TagController::class)->only(['destroy']);

Route::get('/tags',[TagController::class, 'index']);
Route::post('/tags',[TagController::class, 'store']);
Route::put('/tags/{id}',[TagController::class, 'update']);
Route::delete('/tags/{id}',[TagController::class, 'delete']);
