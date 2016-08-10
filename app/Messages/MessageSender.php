<?php

namespace App\Messages;

use App\Message;
use Illuminate\Support\Facades\Log;

class MessageSender
{
    public function __construct(TwitterPublisher $twitter)
    {
        $this->twitter = $twitter;
    }

    public function send()
    {
        $message = Message::nextToSend()->first();

        if (is_null($message)) {
            return;
        }

        $messageText = with(new MessageBuilder($message))->constructMessage();

        if (env('APP_SEND_TO_SOCIAL') != 'true') {
            return Log::info($messageText);
        }

        try {

            $response = $this->twitter->post($messageText);
            $message->response = $response->getBody()->getContents();
            $message->sent = 1;

        } catch (\GuzzleHttp\Exception\ClientException $e) {

            $message->response = $e->getMessage();

        }

        $message->tries += 1;

        $message->save();
    }
}