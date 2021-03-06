<?php

namespace App\Http\Controllers\Quantified;

use App\Tweets\Tweet;
use App\Http\Requests;
use App\Tweets\TweetManager;
use Illuminate\Http\Request;
use App\Messages\TwitterPublisher;
use App\Http\Controllers\Controller;

class TweetsController extends Controller
{

    public function index()
    {
        $tweets = Tweet::orderBy('timestamp', 'desc')->paginate(200);

        return view('tweets.index', compact('tweets'));
    }

    public function backdated(TwitterPublisher $twitter)
    {
        $tweets = $twitter->retrieveTweets();

        try {

            $tweets = json_decode($tweets->getBody()->getContents());

        } catch (Exception $e) {

            Log::warning($e->getMessage());

            abort(500);

        }

        foreach ($tweets as $tweet) {

            TweetManager::save($tweet);

        }
    }
}
