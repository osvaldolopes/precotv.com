<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MercadorController;
use App\Http\Controllers\MercadorViewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessageController;
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
//O QUE E DIGITADO NA URI    CLASSE CONTROLE     NOME DA ROTA   ?page=1

//HOME


Route::get('/{dp_id}', [HomeController::class, 'home'])
    ->where('dp_id', '[0-9]+')
    ->name('home');

//LOGIN
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/password', [UserController::class, 'password'])->name('password');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registered'])->name('register.registered');

//PRODUCT
Route::get('/dashboard', [MercadorController::class, 'dashboard'])->name('dashboard');
Route::get('/tables', [MercadorViewController::class, 'tables'])->name('tables');

//MENSAGENS
Route::get('/message', [MessageController::class, 'message'])->name('message');