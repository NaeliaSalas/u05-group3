<?php

namespace App\Http\Controllers;

use App\Models\MovieGenres;
use Illuminate\Http\Request;

class MovieGenreController extends Controller
{
    public function show($id){

        $movies = MovieGenres::where('genre_id_fk', $id);


    }
}
