<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenres;
use Illuminate\Http\Request;
use App\Http\Controllers\MovieController;

class MovieGenreController extends Controller
{

    public function moviePosted(Request $request)
    {
        $posted = $request->posted;
        $movieId = $request->movieId;

        $isChecked = 'unchecked';
        return view('admin.addmovie', ['posted' => $posted, 'movieId' => $movieId, 'isChecked' => $isChecked]);
    }

    public function toggleCheck(Request $request)
    {
        $posted = true;

        //Lägg till

        $moviegenre = new MovieGenres;
        $moviegenre->genre_id_fk = $request->genre_id_fk;
        $moviegenre->movie_id_fk = $request->movie_id_fk;
        $moviegenre->save();

        $entry = $moviegenre->id;
        $movieId = $request->movieId;
        $isChecked = 'checked';
        return view('admin.addmovie', ['entry' => $entry, 'movieId' => $movieId, 'posted' => $posted, 'isChecked' => $isChecked, 'message' => 'genre added']);


        // //Ta bort

        // $entry = MovieGenres::where('genre_id_fk', $request->genre_id_fk)->where('movie_id_fk', $request->movie_id_fk)->first();
        // $entry->delete();
        // $toggle = 'unchecked';
        // return view('admin.addmovie', ['movie' => $movie, 'posted' => $posted]);
    }
}
