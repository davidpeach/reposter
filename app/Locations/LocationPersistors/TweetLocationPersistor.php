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
        return $this->locationData->lat;
    }

    public function lng()
    {
        return $this->locationData->lng;
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