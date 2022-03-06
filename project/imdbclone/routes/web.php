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


// //Add Review
// Route::view('review.add-review', 'review.add-review');


// Resource controllers
Route::resource('movie', MovieController::class);

Route::resource('comment', CommentController::class);

Route::resource('movie.review', ReviewController::class)->shallow();

route::resource('watchlist', WatchlistController::class);

// MovieGenres

Route::get('moviegenre', [MovieGenreController::class, 'moviePosted']);
Route::post('moviegenre/{entry}', [MovieGenreController::class, 'toggleCheck']);

//Route to genres
Route::get('genre/{genrename}', [GenreController::class, 'show']);

// Rout to register new user
/* Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store'])->name("register.user"); */

// Route for user to login
Route::get('login', [SessionsController::class, 'create']);
Route::post('login', [SessionsController::class, 'store'])->name('login.user');

Route::post('logout', [SessionsController::class, 'destroy']);

route::resource('entry', EntryController::class);
Route::resource('user', UserController::class);

// Route for user to login
Route::get('login', [SessionsController::class, 'create']); //->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->name('login.user'); //->name("login.user");
Route::get('logout', [SessionsController::class, 'destroy']); //->middleware('auth');

// Admin
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [SessionsController::class, 'adminlogin']);
});
