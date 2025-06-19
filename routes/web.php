<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class,'index']);

// Route::get('/about', AboutController::class);
// Route::get('/contact', [IndexController::class,'contact']);
// Route::get('/job',[JobController::class,'index']);
