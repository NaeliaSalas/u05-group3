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
        $message = 'Genres added';
        return view('admin.movie', ['message' => $message]);
    }

    public function update(Request $request, $id)
    {
        if ($request->genres == null) {
            $message = 'Please add genre';
            return redirect()->back()->with(['message' => $message]);
        }

        MovieGenres::where('movie_id_fk', $id)->delete();
        foreach ($request->genres as $genreId)
            MovieGenres::create(
                ['movie_id_fk' => $request->movie_id_fk, 'genre_id_fk' => $genreId]
            );
        $message = 'Genres Updated';
        return redirect()->back()->with(['message' => 'genres updated']);
    }
}
