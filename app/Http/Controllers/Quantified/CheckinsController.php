<?php

namespace App\Http\Controllers\Quantified;

use Carbon\Carbon;
use App\Http\Requests;
use App\Checkins\Checkin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Locations\LocationPersistors\CheckinLocationPersistor;

class CheckinsController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        if ( ! $request->has('secret') || $request->get('secret') !== env('FOURSQUARE_SECRET')) {
            abort(401);
        }

        $data = json_decode($request->get('checkin'));

        $venue = $data->venue;

        $location = with( new CheckinLocationPersistor($data->venue))->ensureExistsAndReturn();

        $checkin = new Checkin;
        $checkin->timestamp = Carbon::createFromTimestamp($data->createdAt);
        $checkin->location_id = $location->id;
        $checkin->save();
    }

}
