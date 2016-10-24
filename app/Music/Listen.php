<?php

namespace App\Music;

use Carbon\Carbon;
use App\Music\Song;
use Illuminate\Database\Eloquent\Model;

class Listen extends Model
{
    protected $fillable = ['song_id', 'listened_at'];

	public $dates = ['listened_at'];

    public static function lastRetrieved()
    {
    	$lastRetrieved = self::orderBy('listened_at', 'desc')->limit(1)->first();

    	if (is_null($lastRetrieved)) {
    		$lastRetrieved = Carbon::createFromTimeStamp(47);
    	} else {
    		$lastRetrieved = $lastRetrieved->listened_at;
    	}

    	return $lastRetrieved->timestamp + 1;
    }

    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
