<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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


//Xác thực người dùng 
Route::get('/profile', 'ProfileController@index')->middleware('auth');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::resource('products', ProductController::class);

// Route::get('/products', [ProductController::class, 'index']);

Route::resource('posts', PostController::class);
Route::get('/', [HomeController::class, 'getAllArticales']);
