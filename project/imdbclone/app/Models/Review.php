<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable = ['title', 'body', 'rate'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id_fk');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'review_id_fk');
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
