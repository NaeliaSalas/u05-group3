<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\Models\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
    // Lägg till en lista
    // Spara en lista i databasen med titel

    // Ta bort en lista
    // Ta bort lista på watchlist ID

    // Visa en lista tillhörande user
    // Visa lista med tillhörande entries 

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
    }
}
