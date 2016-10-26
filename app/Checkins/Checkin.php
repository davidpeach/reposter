<?php

namespace App\Checkins;

use App\Locations\Location;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $fillable = [];

    public function location()
    {
        //return $this->belongsTo(Location::class);
    }

}
