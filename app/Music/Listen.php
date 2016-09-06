<?php

namespace App\Music;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Listen extends Model
{
    protected $fillable = ['song_id', 'listened_at'];

    public static function lastRetrieved()
    {
    	$lastRetrieved = self::orderBy('listened_at', 'desc')->limit(1)->first();

    	if (is_null($lastRetrieved)) {
    		$lastRetrieved = Carbon::createFromTimeStamp(47);
    	}

    	return $lastRetrieved->timestamp;
    }
}
