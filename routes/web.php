<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/profile', [ProfileController::class, 'index']);

// Home
Route::get('/', [DashboardController::class, 'index'])->name('home');

// Posts routes
Route::get('/feed', [DashboardController::class, 'feed'])->name('feed');
Route::post('/create-post', [PostController::class, 'index'])->name('createPost');

// Authentication routes
Route::get('/register', [AuthController::class, 'index'])->name('registerPage');
Route::post('/register', [AuthController::class, 'store'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('loginPage');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/{name?}', function ($name) {
//     // return view('name', [$name]);
//     return view('name',);
// });
