<?php

namespace App\Music;

use App\Music\Album;
use App\Music\Listen;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['album_id', 'title'];


    public function album()
    {
        return $this->belongsTo(Album::class);
    }


    public function listens()
    {
        return $this->hasMany(Listen::class);
    }
}
