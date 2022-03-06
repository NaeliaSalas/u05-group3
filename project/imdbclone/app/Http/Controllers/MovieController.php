<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieGenres;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\MovieGenreController;

class MovieController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('admin')->except('getMovies', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::orderBy('title', 'asc')->get();
        return view('admin.movies', ['movies' => $movies]);
    }

    /**
     * Additional function to retrieve all movies for display on landing page
     * 
     * @return \Illuminate\Http\Response
     */
    public function getMovies()
    {
        $movies = Movie::get();
        return view('index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posted = false;
        return view('admin.addmovie', ['posted' => $posted]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'string|required|max:255',
            'body' => 'string|required|max:255',
            'cover' => 'required|max:255',
            'hero' => 'required|max:255',
            'rating' => 'integer|required|max:255',
            'trailer' => 'required|max:255',
            'yearproduced' => 'integer|required|min:1900|max:2023',
            'director' => 'string|required|max:255',

        ]);
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->body = $request->body;
        $movie->cover = $request->cover;
        $movie->hero = $request->hero;
        $movie->rating = $request->rating;
        $movie->trailer = $request->trailer;
        $movie->yearproduced = $request->yearproduced;
        $movie->director = $request->director;
        $movie->save();

        $posted = true;
        return view('admin.addmovie', ['posted' => $posted, 'movie' => $movie, 'message' => 'Add genres']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movie', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('admin.editmovie', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'string|required|max:255',
            'body' => 'string|required|max:255',
            'cover' => 'required|max:255',
            'hero' => 'required|max:255',
            'rating' => 'integer|required|max:255',
            'trailer' => 'required|max:255',
            'yearproduced' => 'integer|required|min:1900|max:2023',
            'director' => 'string|required|max:255',

        ]);

        $movie = Movie::find($id);
        $movie->title = $request->title;
        $movie->body = $request->body;
        $movie->cover = $request->cover;
        $movie->hero = $request->hero;
        $movie->rating = $request->rating;
        $movie->trailer = $request->trailer;
        $movie->yearproduced = $request->yearproduced;
        $movie->director = $request->director;
        $movie->update();

        return redirect('movie')->with('status', 'The movie has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return redirect()->back()->with('status', 'The movie has been deleted!');
    }
}
