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

            return view('search', ['movies' => $movies]);;
        }
    }
}
