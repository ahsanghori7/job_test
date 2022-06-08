<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;
use App\Models\Comment;

class Film extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'description',
        'release_date',
        'rating',
        'ticket_price',
        'country',
        'photo',
    ];


     public function genres()
    {
        return $this->belongsToMany(Genre::class,"film_genre");
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
