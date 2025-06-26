<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;

Route::get('/', [HomeController::class, 'view']);
Route::get('/blog', [BlogController::class, 'view']);
Route::get('/blog/{key}', [BlogController::class, 'view']);

Route::post('/contact', [ContactController::class, 'send']);
