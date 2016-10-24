<?php

namespace App;

use App\Message;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'url',
        'published_at',
        'hashtags',
    ];

    protected $dates = ['published_at'];


    public function messages()
    {
        return $this->hasMany(Message::class);
    }


    public function unsentMessages()
    {
        return $this->messages()->where('sent', 0)->get();
    }
}
