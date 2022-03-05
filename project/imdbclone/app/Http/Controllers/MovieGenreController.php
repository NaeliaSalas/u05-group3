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

    public function store(Request $request) 
    {
        $moviegenre = new MovieGenres;

        $moviegenre->genre_id_fk = $request->genre_id_fk;
        $moviegenre->movie_id_fk = $request->movie_id_fk;
        $moviegenre->save();

        return redirect('movie');


    }

    public function movieGenresId($id)
    {

        $moviegenreid = MovieGenres::get($id);
        return view('movie.create', ['moviegenreid' => $moviegenreid]);
    }
}
