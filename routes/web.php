<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/profiles/{profile:id}', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/create', [ProfileController::class, 'create'])->name('create');
Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy'])->name('profiles.delete');
Route::post('/store',[ProfileController::class, 'store'])->name('store');
Route::get('/settings', [InformationsController::class, 'index'])->name('informations.index');
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');