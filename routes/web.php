<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class, 'index'])->name('home');
Route::get('/dub', [TestController::class, 'dub'])->name('dub');
Route::get('/about', [TestController::class, 'about'])->name('about');
