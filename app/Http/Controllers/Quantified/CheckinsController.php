<?php

namespace App\Http\Controllers\Quantified;

use Log;
use Carbon\Carbon;
use App\Http\Requests;
use App\Checkins\Checkin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Locations\LocationPersistors\CheckinLocationPersistor;

class CheckinsController extends Controller
{
    public function __construct()
    {
        Log::info('constricting');
    }


    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        if ( ! $request->has('secret') || $request->get('secret') !== env('FOURSQUARE_SECRET')) {
            abort(401);
        }
        return 'here';
        $data = json_decode($request->get('checkin'));
        Log::info($data);
        $venue = $data->venue;
        Log::info($venue);
        $location = with( new CheckinLocationPersistor($data->venue))->ensureExistsAndReturn();
        Log::info($location);
        $checkin = new Checkin;
        $checkin->timestamp = Carbon::createFromTimestamp($data->createdAt);
        $checkin->location_id = $location->id;
        $checkin->save();
    }

}
