<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/create', [App\Http\Controllers\CreateController::class, 'create'])->name('create');
Route::post('/create', [App\Http\Controllers\CreateController::class, 'NewCreate'])->name('NewCreate');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/todoIndex', [App\Http\Controllers\HomeController::class, 'todoIndex'])->name('todoIndex');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'menu'])->name('menu');



Route::get('/post', [PostController::class, 'index'])->name('index');
Route::post('/tweet', [PostController::class, 'tweet'])->name('tweet');







