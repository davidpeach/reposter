<?php

namespace App\Tweets;

use App\Tweets;
use Carbon\Carbon;
use App\Http\Presenters\NotesPresenter;
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

    public function present()
    {
        return new NotesPresenter($this);
    }
}
