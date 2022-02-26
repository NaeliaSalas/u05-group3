<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::get();

        return view('review.review', ['reviews' => $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('review.review');
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
            'rate' => 'integer|required|min:1|max:5',
            'user_id_fk' => 'required',
            'movie_id_fk' => 'required'
        ]);


        $review = new Review;
        $review->title = $request->title;
        $review->body = $request->body;
        $review->rate = $request->rate;
        $review->user_id_fk = $request->user_id_fk;
        $review->movie_id_fk = $request->movie_id_fk;
        $review->save();
        return redirect('review')->with('status', 'Review Has Been posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        return view('review.show', ['review' => $review]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        return view('review.edit', ['review' => $review]);
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
            'title' => 'string|required|max:50',
            'body' => 'string|required||max:255',
            'rate' => 'integer|required|min:1|max:5',
        ]);

        $review = Review::find($id);
        $review->title = $request->title;
        $review->body = $request->body;
        $review->rate = $request->rate;
        $review->update();
        return redirect('review');
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
