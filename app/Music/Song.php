<?php

namespace App\Music;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['album_id', 'title'];
}
