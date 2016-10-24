<?php

namespace App\Music;

use App\Music\Album;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name'];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
