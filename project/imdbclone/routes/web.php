<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieGenreController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WatchlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MustBeAdmin;
use App\Models\Movie;
use Egulias\EmailValidator\Warning\Warning;
use Symfony\Component\Console\Input\Input;

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

Route::get('/', [MovieController::class, 'getMovies']);

//search route
Route::get('search', [SearchController::class, 'search'])->name('search');

//Route to genres
Route::get('genre/{genrename}', [GenreController::class, 'show']);

// Register page
Route::view('/register', 'register.register');

// Resource controllers
Route::resource('movie', MovieController::class);

Route::resource('movie.review', ReviewController::class)->only(['create', 'store', 'destroy'])->shallow();

Route::resource('watchlist', WatchlistController::class);

Route::resource('entry', EntryController::class)->only(['store', 'destroy']);


Route::resource('user', UserController::class);

// MovieGenres
Route::post('moviegenre/', [MovieGenreController::class, 'store']);
Route::post('moviegenre/{id}', [MovieGenreController::class, 'update']);

// Route for user to login
Route::get('login', [SessionsController::class, 'create']);
Route::post('login', [SessionsController::class, 'store'])->name('login.user');

Route::get('logout', [SessionsController::class, 'destroy']);



// Admin
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [SessionsController::class, 'adminlogin']);
});
