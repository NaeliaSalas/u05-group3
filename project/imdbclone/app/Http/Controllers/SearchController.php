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
            var_dump($movies);

            if ($movies->isEmpty()->with ('message', 'No result found'){
              return view('search', ['movies' => $movies]);

            }

                

            
            }


      
        }
    }

