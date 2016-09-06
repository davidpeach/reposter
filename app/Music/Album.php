<?php

namespace App\Music;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['artist_id', 'title', 'images', 'release_date'];
}
