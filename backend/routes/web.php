<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'pass'])->name('pass');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'connect'])->name('connect');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::post('/menu', [App\Http\Controllers\MenuController::class, 'menu'])->name('menu');
Route::post('/todoIndex', [App\Http\Controllers\HomeController::class, 'todoIndex'])->name('connect');






