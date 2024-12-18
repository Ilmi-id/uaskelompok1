<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController\homeController;

Route::get('/', [homeController::class, 'index']) ->name('home');

Route::get('/login', function () {return view('login'); })->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');
