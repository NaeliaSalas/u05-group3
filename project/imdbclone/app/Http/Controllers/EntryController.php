<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('watchlist.watchlist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('watchlist.watchlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Entry::where('movie_id_fk', $request->movie_id_fk)->where('watchlist_id_fk', $request->watchlist_id_fk)->exists()) {

            return redirect('watchlist')->with('mesage', 'Alredy exists in watchlist');
        } else {
            $request->validate([
                'title' => 'required|string|max:255',
                'movie_id_fk' => 'required',
                'watchlist_id_fk' => 'required'

            ]);

            $entry = new Entry;
            $entry->movie_id_fk = $request->movie_id_fk;
            $entry->watchlist_id_fk = $request->watchlist_id_fk;
            $entry->title = $request->title;
            $entry->save();
            return redirect('watchlist')->with('status', 'Your comment has been posted!');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry = Entry::find($id);
        $entry->delete();
        return redirect('watchlist');
    }
}
