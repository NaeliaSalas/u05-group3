<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\WatchlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MustBeAdmin;
use Egulias\EmailValidator\Warning\Warning;

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

Route::resource('movie', MovieController::class);

Route::resource('comment', CommentController::class);
//Route::resource('edit-comment', CommentController::class);

Route::resource('review', ReviewController::class);


Route::get('register', [RegisterController::class, 'create']); //->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name("register.user");

Route::get('login', [SessionsController::class, 'create']); //->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->name('login.user'); //->name("login.user");

Route::post('logout', [SessionsController::class, 'destroy']); //->middleware('auth');

Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [SessionsController::class, 'adminlogin']);
});

/* Route to category */
route::get('/category', function () {
    return view('category');
});


// Watchlist routes

route::get('watchlist', [WatchlistController::class, 'showAll']);
route::get('watchlist/{id}', [WatchlistController::class, 'show']);
route::post('watchlist', [WatchlistController::class, 'store']);
route::delete('watchlist/{id}/delete', [WatchlistController::class, 'destroy']);
