<?php

namespace App\Locations\LocationPersistors;

use App\Locations\LocationPersist;

class TweetLocationPersistor extends LocationPersist
{

    public function name()
    {
        return $this->locationData->name;
    }

    public function lat()
    {
        if (property_exists($this->locationData, 'lat')) {
            return $this->locationData->lat;
        }

        return null;
    }

    public function lng()
    {
        if (property_exists($this->locationData, 'lng')) {
            return $this->locationData->lng;
        }

        return null;
    }

    public function address()
    {
        return $this->locationData->full_name;
    }

    public function country()
    {
        return $this->locationData->country;
    }

}