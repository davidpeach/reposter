<?php

namespace App\Locations;

use App\Checkins\Checkin;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['uid', 'name', 'checkin_timestamp', 'lat', 'lng', 'address', 'city', 'state', 'postalCode', 'country', 'venue_serialized'];

    public function checkins()
    {
        //return $this->hasMany(Checkin::class);
    }


    /**
     * Create the location if it doesn't already exist and return it either way
     * @param  [type] $location
     * @return Location the location model
     */
    public static function existsAndReturn($location)
    {
        if ( ! $locationFound = self::whereUid($location->id)->orWhere('name', $location->name)->first()) {

            $insertData = [
                'uid' => $location->id,
                'name' => $location->name,
                'venue_serialized' => serialize($location),
            ];

            $possibleColumns = ['lat', 'lng', 'address', 'city', 'state', 'postalCode', 'country'];

            foreach ($possibleColumns as $column) {
                if (property_exists($location->location, $column)) {
                    $insertData[$column] = $location->location->{$column};
                }
            }

            $locationFound = self::create($insertData);

        }

        return $locationFound;
    }

}
