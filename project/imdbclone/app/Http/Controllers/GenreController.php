<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function show($genrename)
    {
        $genre = Genre::where('genre', $genrename)->first();
        return view('genre', ['genre' => $genre]);
    }
}
