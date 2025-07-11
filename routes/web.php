<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::view('/', 'landing.home')->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::view('/dashboard', 'landing.dashboard')->name('dashboard');
Route::view('/kebijakan-privasi', 'landing.rules')->name('policy');
Route::view('/tentang-kami', 'landing.about')->name('about');
