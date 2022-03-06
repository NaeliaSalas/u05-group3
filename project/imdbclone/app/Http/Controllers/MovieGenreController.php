<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenres;
use Illuminate\Http\Request;
use App\Http\Controllers\MovieController;

class MovieGenreController extends Controller
{

    public function store(Request $request)
    {

        foreach ($request->genres as $genreId)
            MovieGenres::create(
                ['movie_id_fk' => $request->movie_id_fk, 'genre_id_fk' => $genreId]
            );
        return view('admin.movie', ['message' => 'genres added']);
    }
}
