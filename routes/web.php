<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');
