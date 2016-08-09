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


        // if (env('APP_SEND_TO_SOCIAL') == 'true') {

        //     try {
        //         $response = $this->client->post($this->getMakeTweetUrl($messageText));
        //         $response = $response->getBody()->getContents();
        //     } catch (\GuzzleHttp\Exception\ClientException $e) {
        //         $response = $e->getMessage();
        //     }

        // } else {

        //     $response = 'Test Post Success. You go Glen Coco!';

        //     Log::info($messageText);

        // }

        // return $response;
    }

    private function getMakeTweetUrl($status)
    {
        return 'https://api.twitter.com/1.1/statuses/update.json?' . http_build_query(compact('status'));
    }
}