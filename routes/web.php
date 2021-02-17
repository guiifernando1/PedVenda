<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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



    //aqui é um grupo de rotas grupo home tudo o que tera na home
    Route::prefix('/home')->name('home.')->group(function () {
        //as rotas que estarão dentro da home
        Route::get('/index', [HomeController::class, 'index'])->name('index');
        Route::post('/open-page', [HomeController::class, 'openPage'])->name('open_page');
        Route::post('/register-product', [HomeController::class, 'registerProduct'])->name('register_product');
    });

