<?php

namespace App\Messages;

use App\Tweets\Tweet;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class TwitterPublisher
{
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function post($messageText)
    {
        return $this->client->post($this->getMakeTweetUrl($messageText));
    }

    public function retrieveTweets()
    {
        return $this->client->get($this->getTweetsRetrievalUrl());
    }

    private function getMakeTweetUrl($status)
    {
        return 'https://api.twitter.com/1.1/statuses/update.json?' . http_build_query(compact('status'));
    }

    protected function getTweetsRetrievalUrl()
    {
        $tweet = Tweet::orderBy('timestamp', 'desc')->first();

        $request = [
            'screen_name' => 'chegalabonga',
            'count' => '2000',
            'include_rts' => 'true',
            'exclude_replies' => 'false'
        ];

        if ( ! is_null($tweet)) {
            $request['since_id'] = $tweet->uid;
        }

        return 'https://api.twitter.com/1.1/statuses/user_timeline.json?' .
                    http_build_query($request);
    }

    protected function getFavouritesRetrievalUrl()
    {
        return 'https://api.twitter.com/1.1/favorites/list.json?
            count=5
            &screen_name=chegalabonga';
    }
}
