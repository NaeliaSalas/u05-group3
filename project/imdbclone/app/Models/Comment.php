<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'body'
    ];

    public function review()
    {
        //A comment belongs to a review
        return $this->belongsTo(Review::class);
    }

 /*    public function author() 
    {
        //A comment belongs to a user. Since the function is called author the user id is specified
        return $this->belongsTo(User::class, 'user_id_fk');
    } */
}
