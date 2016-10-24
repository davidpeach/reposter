<?php

namespace App;

use App\Post;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'post_id',
        'scheduled_for',
        'tries',
    ];


    protected $dates = ['scheduled_for'];


    public function scopeNextToSend($query)
    {
        return $query->orderBy('scheduled_for', 'asc')
                    ->whereSent(0)
                    ->where('scheduled_for', '<', Carbon::now())
                    ->where('tries', '<', 4);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }


}
