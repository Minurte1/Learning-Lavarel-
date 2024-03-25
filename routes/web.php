<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Examples\Example1Controller;
use App\Http\Controllers\Examples\Example2Controller;
use App\Http\Controllers\Examples\Example3Controller;

Route::apiResource('example4', Example4Controller::class)->parameters([
    'example4' => 'news'
]);
Route::any('/example3/{frm}', [Example3Controller::class, 'update']);
Route::get('/example2', [Example2Controller::class, 'show']);
Route::get('/example1', [Example1Controller::class, 'index'])->middleware('can:example1.viewAny');
Route::resource('/dashboard', DashboardController::class);

Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);

//Xác thực người dùng 
Route::get('/profile', 'ProfileController@index')->middleware('auth');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');

Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');

Route::resource('products', ProductController::class);

// Route::get('/products', [ProductController::class, 'index']);

Route::resource('posts', PostController::class);
Route::get('/', [HomeController::class, 'getAllArticales']);
