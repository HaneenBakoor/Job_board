<?php

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
// Route::middleware('auth:api')->group(function(){

// });
Route::post('/posts/create',[PostController::class, 'store']);

Route::post('/login',[AuthController::class, 'Login']);
Route::post('/signup',[AuthController::class, 'Signup']);
Route::get('/me',[AuthController::class, 'me'])->middleware('auth:api');
Route::post('/logout',[AuthController::class, 'logout'])->middleware('auth:api');


Route::middleware(['role:editor,admin'])->group(function(){
Route::patch('/posts/{post}/update',[PostController::class, 'update'])->can('update','Post');
});
//admin
Route::middleware('role:admin')->group(function(){
Route::delete('/posts/{post}/delete',[PostController::class, 'destroy']);

});

//Editor viewer admin
Route::middleware(['auth:api','role:viewer,editor,admin'])->group(function(){
Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{post}',[PostController::class, 'show']);
});

//admin editor


// Route::apiResource('posts',PostController::class)->except(['destroy'])->middleware('auth:api');
// Route::apiResource('tags',TagController::class)->only(['destroy']);

// Route::get('/tags',[TagController::class, 'index']);
// Route::post('/tags',[TagController::class, 'store']);
// Route::put('/tags/{id}',[TagController::class, 'update']);
// Route::delete('/tags/{id}',[TagController::class, 'delete']);
