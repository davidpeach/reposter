<?php

namespace App\Tweets;

use App\Tweets;
use Illuminate\Database\Eloquent\Model;

class TweetContext extends Model
{
    protected $fillable = [
        'uid',
    ];

    protected $dates = ['published_at'];

}
