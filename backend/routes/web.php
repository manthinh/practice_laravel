<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/todoIndex', [App\Http\Controllers\HomeController::class, 'todoIndex'])->name('todoIndex');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');

  Route::get('/menu',[
  'uses' => 'MenuController@getMenu',
  'as' => 'user.menu'
  ]);

  Route::post('/menu',[
    'uses' => 'UserController@postMenu',
    'as' => 'user.menu'
  ]);

