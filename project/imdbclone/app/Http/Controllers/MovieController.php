<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::get();
        return view('movie.index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
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
            'pics' => 'required|max:255',
            'rating' => 'integer|required|max:255',
            'trailer' => 'required|max:255',
            'yearproduced' => 'integer|required|min:1900|max:2023',
            'director' => 'string|required|max:255',
            
        ]);

        $movie = new Movie;
        $movie->title = $request->title;
        $movie->body = $request->body;
        $movie->pics = $request->pics;
        $movie->rating = $request->rating;
        $movie->trailer = $request->trailer;
        $movie->yearproduced = $request->yearproduced;
        $movie->director = $request->director;
        $movie->save(); 
        
        return redirect()->back()->with('status', 'Movie has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $movies = Movie::find($id);
        return view('movie.edit', ['movies' => $movies]);
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
            'pics' => 'required|max:255',
            'rating' => 'integer|required|max:255',
            'trailer' => 'required|max:255',
            'yearproduced' => 'integer|required|min:1900|max:2023',
            'director' => 'string|required|max:255',
            
        ]);

        $movie = Movie::find($id);
        $movie->title = $request->title;
        $movie->body = $request->body;
        $movie->pics = $request->pics;
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
