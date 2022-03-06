<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieGenres extends Model
{
    use HasFactory;

    protected $table = 'movie_genres';

    protected $fillable = [
        'movie_id_fk',
        'genre_id_fk'
    ];
}
