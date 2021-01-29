<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', 'App\Http\Controllers\AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'App\Http\Controllers\AuthController@ShowLoginForm')->name('admin.login'); 

Route::get('teste', 'App\Http\Controllers\teste@gui')->name('teste');





//App\Http\Controllers\
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
