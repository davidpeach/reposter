<?php

namespace App\Locations\LocationPersistors;

use App\Locations\LocationPersist;

class CheckinLocationPersistor extends LocationPersist
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
        return $this->locationData->address;
    }

    public function city()
    {
        return $this->locationData->city;
    }

    public function state()
    {
        return $this->locationData->state;
    }

    public function postalCode()
    {
        return $this->locationData->postalCode;
    }

    public function country()
    {
        return $this->locationData->country;
    }
}