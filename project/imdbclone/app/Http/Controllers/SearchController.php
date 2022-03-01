<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller

{
    public function search(Request $request)
    {
        if (isset($_GET['query'])) {

            $search_movie = $_GET['query'];
            $movies = DB::table('movies')->where('title', 'LIKE', '%' . $search_movie . '%')->paginate(20);
            if (($movies->isEmpty())) {
                return view('search')->with('message', 'Not available');
            } else {
                return view('search', ['movies' => $movies]);
            }
        }
    }
}
