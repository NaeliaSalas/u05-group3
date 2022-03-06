<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReviewController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $movie = Movie::where('id', $id)->first();
        return view('review.add-review', ['movie' => $movie]);
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
            'title' => 'string|required|max:50',
            'body' => 'string|required||max:255',
            'rating' => 'integer|required|min:1|max:5',
            'user_id_fk' => 'required',
            'movie_id_fk' => 'required'
        ]);


        $review = new Review;
        $review->title = $request->title;
        $review->body = $request->body;
        $review->rating = $request->rating;
        $review->user_id_fk = $request->user_id_fk;
        $review->movie_id_fk = $request->movie_id_fk;
        $review->save();
        return redirect()->route('movie.show', ['movie' => $request->movie_id_fk]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();

        return redirect('review');
    }
}
