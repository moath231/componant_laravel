<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staticController;
use App\Http\Controllers\computerController;
use App\Http\Controllers\userController;

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

Route::get('/',[staticController::class, 'index'])-> name('home.index');
Route::get('/about',[staticController::class, 'about'])-> name('home.about');;
Route::get('/contact',[staticController::class, 'contact'])-> name('home.contact');;

Route::resource('computer', computerController::class);
Route::resource('users', userController::class);


