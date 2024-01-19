<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', [userController::class, 'home']);
    Route::get('/login', [loginController::class, 'login'])->name('login');
    Route::post('/auth', [loginController::class, 'auth'])->name('login.auth');
    Route::get('/register', [registerController::class, 'register'])->name('register');
    Route::post('/registerAccount', [registerController::class, 'registerAccount'])->name('register.account');
    Route::get('/cetak', [registerController::class, 'cetak'])->name('cetak');
    Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [dashboardController::class, 'logout'])->name('logout');
