<?php

namespace App\Locations;

use StdClass;
use App\Locations\Location;

abstract class LocationPersist
{
    protected $locationData;

    public function __construct(StdClass $locationData)
    {
        $this->locationData = $locationData;
    }

    /**
     * Create the location if it doesn't already exist and return it either way
     * @param  [type] $location
     * @return Location the location model
     */
    public function ensureExistsAndReturn()
    {
        if ( ! $locationFound = Location::whereName($this->name())->first()) {

            $insertData = [
                'name' => $this->name(),
                'venue_serialized' => $this->venueSerialized(),
            ];

            $availableColumns = ['lat', 'lng', 'address', 'city', 'state', 'postalCode', 'country'];

            foreach ($availableColumns as $column) {
                $insertData[$column] = $this->{$column}();
            }

            $locationFound = Location::create($insertData);

        }

        return $locationFound;
    }

    abstract public function name();

    abstract public function lat();

    abstract public function lng();

    public function address()
    {
        return null;
    }

    public function city()
    {
        return null;
    }

    public function state()
    {
        return null;
    }

    public function postalCode()
    {
        return null;
    }

    public function country()
    {
        return null;
    }

    public function venueSerialized()
    {
        return serialize($this->locationData);
    }
}