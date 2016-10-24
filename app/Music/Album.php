<?php

namespace App\Music;

use App\Music\Song;
use App\Music\Artist;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['artist_id', 'title', 'images', 'release_date'];


    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }


    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
