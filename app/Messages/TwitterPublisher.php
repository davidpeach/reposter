<?php

namespace App\Messages;

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

    public function retrieve()
    {
        $response = $this->client->get($this->getTweetsRetrievalUrl());

        dd($response->getBody()->getContents());
    }

    private function getMakeTweetUrl($status)
    {
        return 'https://api.twitter.com/1.1/statuses/update.json?' . http_build_query(compact('status'));
    }

    protected function getTweetsRetrievalUrl()
    {
        return 'https://api.twitter.com/1.1/statuses/user_timeline.json?
                    screen_name=chegalabonga
                    &count=5
                    &include_rts=true
                    &since_id=1';
    }
}