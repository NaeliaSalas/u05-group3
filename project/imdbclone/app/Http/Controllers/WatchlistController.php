<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * Will only show watchlists for currently signed in user
     */
    public function index()
    {
        $userId = Auth::id();
        $watchlists = Watchlist::where('user_id_fk', $userId)->get();
        return view('watchlist.watchlist', ['watchlists' => $watchlists]);
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
        $request->validate([
            'title' => 'string|required|max:50'
        ]);

        $watchlist = new Watchlist;
        $watchlist->title = $request->title;
        $watchlist->user_id_fk = $request->user_id_fk;
        $watchlist->save();

        return redirect('watchlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userId = Auth::id();
        $watchlist = Watchlist::where('user_id_fk', $userId)->find($id);
        return view('watchlist.show', ['watchlist' => $watchlist]);
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
        $watchlist = Watchlist::find($id);
        $watchlist->delete();

        return redirect('watchlist');
    }
}
