<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

//Route::verb('uri', Controller::method)->name('route-name');


//HOME
Route::get('/', [HomeController::class, 'home'])->name('home');

//LOGIN
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/password', [UserController::class, 'password'])->name('password');
Route::get('/register', [UserController::class, 'register'])->name('register');

//PRODUCT
Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
Route::get('/tables', [ProductController::class, 'tables'])->name('tables');

