<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movies';
    protected $fillable = [
        'title',
        'body',
        'cover',
        'hero',
        'rating',
        'trailer',
        'yearproduced',
        'director'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'movie_id_fk');
    }

    public function watchlists()
    {
        return $this->belongsToMany(Watchlist::class, 'entries', 'movie_id_fk', 'watchlist_id_fk');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genres', 'movie_id_fk', 'genre_id_fk');
    }

    public function entries()
    {
        return $this->belongsToMany(Entry::class, 'entries', 'movie_id_fk')->withPivot('id');
    }
}
