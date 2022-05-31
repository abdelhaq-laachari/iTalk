<?php

use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;


// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('users/profile/{id}', [UserController::class, 'getUser'])->name('Profile');
Route::post('users/profile/edit/{id}', [UserController::class, 'updateUser'])->name('Profile.edit');
Route::get('users/profile/delete/{id}', [UserController::class, 'deleteUser'])->name('Profile.delete');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/all-posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store'])->name('posts.form');
Route::post('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/posts/{post:id}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::post('/posts/{post:id}/notlikes', [PostLikeController::class, 'destroy'])->name('posts.notlikes');


Route::get('/admin', [AdminLoginController::class, 'index'])->name('admin');
Route::post('/admin', [AdminLoginController::class, 'store']);
