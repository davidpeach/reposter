<?php

namespace App\Tweets;

use App\Tweets;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $fillable = [
        //
    ];

    protected $dates = ['timestamp'];

    public function setPublishedAtAttribute($date)
    {
        return new Carbon($date);
    }
}
