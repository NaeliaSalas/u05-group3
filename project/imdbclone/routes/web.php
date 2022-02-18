<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use GuzzleHttp\Middleware;
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
    return view('welcome');
});


Route::get('register', [RegisterController::class, 'create']); //->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name("register.user");

Route::get('login', [SessionsController::class, 'create']); //->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->name('login.user'); //->name("login.user");

Route::post('logout', [SessionsController::class, 'destroy']); //->middleware('auth');

// Route till Admin sidan
Route::get('admin/posts/create', [PostController::class, 'create'])->middleware('admin');
// Route::post('admin/posts/create', [PostController::class, 'store'])->name('login.admin'); //->name("login.user");
