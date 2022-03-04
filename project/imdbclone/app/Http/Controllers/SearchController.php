<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller

{
    public function search()
    {
        if (request('search')) {

            $movies = Movie::where('title', 'LIKE', '%' . request('search') . '%')->get();

            if ($movies->count() == 0) {
                return view('search')->with('message', 'nothing found');
            }

            // }
            // else{
            // return view('search', ['movies' => $movies]);

        }
    }
}
