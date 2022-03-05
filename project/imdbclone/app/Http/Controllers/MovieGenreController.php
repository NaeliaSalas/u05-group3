<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenres;
use Illuminate\Http\Request;

class MovieGenreController extends Controller
{
    public function index()
    {



        $genres = MovieGenres::get('genre_id_fk');


        return view('entry.show', ['genres' => $genres]);
    }

    public function show($genrename)
    {
        $genre = Genre::where('genre', $genrename)->first();
        return view('genre.genre', ['genre' => $genre]);
    }

    public function movieGenresId($id)
    {

        $moviegenreid = MovieGenres::get($id);
        return view('movie.create', ['moviegenreid' => $moviegenreid]);
    }
}
