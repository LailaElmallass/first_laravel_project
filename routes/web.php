<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InformationsController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/profiles/{profile:id}', [ProfileController::class, 'show'])->name('profiles.show');
Route::get('/create', [ProfileController::class, 'create'])->name('create');
Route::post('/store',[ProfileController::class, 'store'])->name('store');
Route::get('/settings', [InformationsController::class, 'index'])->name('informations.index');

