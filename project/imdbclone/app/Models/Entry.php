<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $table = 'entries';
    protected $fillable = ['title'];

    // public function watchlist()
    // {
    //     return $this->hasOne(Watchlist::class, 'watchlist_id_fk');
    // }
}
