<?php

namespace App\Http\Controllers;

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
}
