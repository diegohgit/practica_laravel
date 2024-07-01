<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
Route::get('/', function () {
    return view('welcome');
});

 */

Route::middleware(['auth'])->group(function(){

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get( '/article', [ArticleController::class, 'index'])->name('article');
    Route::post('/article', [ArticleController::class, 'store']);

});


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


