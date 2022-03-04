<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller

{
    public function search(Request $request)
    {

        $movies = Movie::where('title', 'LIKE', '%' . request('search') . '%')->get();

        if ($movies->isEmpty()) {
            return view('search', ['message' => "No movie available, please try again!", 'movies' => $movies]);
        }
        return view('search', ['movies' => $movies]);
    }
}
