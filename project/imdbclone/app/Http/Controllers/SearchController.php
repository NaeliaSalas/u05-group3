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
            $movies = DB::table('movies')->where('title', 'LIKE', '%' . $search_movie . '%')->paginate(2);

            return view('search', ['movies' => $movies]);
        } else {
        }
        return view('search');
    }
}
