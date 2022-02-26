<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    // Lägg till en lista
    // Spara en lista i databasen med titel 

    // Ta bort en lista
    // Ta bort lista på watchlist ID
    //*****************

    // Visa alla listor tillhörande user
    // Visa lista med tillhörande entries 


    public function showAll()
    {

        $userId = Auth::id();
        $watchlists = Watchlist::where('user_id_fk', $userId)->get();
        return view('watchlist.watchlist', ['watchlists' => $watchlists]);
        //Hämta alla entries med watchlist ID

    }

    public function show($id)
    {

        $userId = Auth::id();
        $watchlist = Watchlist::where('user_id_fk', $userId)
            ->where('id', $id)->get();
        return view('watchlist.show', ['watchlist' => $watchlist]);
    }



    public function index()
    {
        return view('watchlist.watchlist');
    }

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

    public function destroy($id)
    {

        $watchlist = Watchlist::find($id);
        $watchlist->delete();

        return redirect('watchlist');
    }
}
