<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $table = 'watchlists';
    protected $fillable = [
        'title'
    ];

    public function entries()
    {
        return $this->hasMany(Entry::class, 'watchlist_id_fk');
    }
}
