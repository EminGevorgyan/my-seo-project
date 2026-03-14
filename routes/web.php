<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class, 'index'])->name('home');
Route::get('/dub', [TestController::class, 'dub'])->name('dub');
Route::get('/about', [TestController::class, 'about'])->name('about');
Route::get('/users', [TestController::class, 'users'])->name('users');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('login.store');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'handleReg'])->name('register.store');

route::post('/logout', [AuthController::class, 'logout'])->name('logout');
//Route::post('/user/delete', [AuthController::class, 'destroy'])->name('user.delete');
Route::post('/users/{user}/delete', [AuthController::class, 'destroy'])->name('users.destroy');
