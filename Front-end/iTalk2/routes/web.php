<?php

use App\Http\Controllers\HomeController;
// use App\Http\Controllers\UserController;
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

Route::get('/vue/{vue_capture?}', function () {
    return view('welcome');
   })->where('vue_capture', '[\/\w\.-]*');


Auth::routes();

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');

Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('create');

Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

Route::get('post', [App\Http\Controllers\AdminController::class, 'post'])->name('post');

Route::get('user', [App\Http\Controllers\AdminController::class, 'user'])->name('user');

// Route::get('view-records','PostController@index');