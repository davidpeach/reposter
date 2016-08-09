<?php

namespace App\Messages;

use App\Message;

class MessageBuilder
{

    private $messageBody = '';

    private $maxCharacters = 140;

    public function __construct(Message $message)
    {
        $this->message = $message;

        $this->post = $this->message->post;
    }

    public function constructMessage($additionalText = '', $forceAdditional = false)
    {
        $this->addUrlToMessage();

        if ($this->doesntBreakMessageLength($this->post->title)) {
            $this->addTitleToMessage();
        }

        $hashTags = $this->parseHashTags();

        foreach ($hashTags as $hashTag) {
            if (strpos($this->messageBody, ' ' . $hashTag . ' ') !== false) {

                if ($this->doesntBreakMessageLength('#')) {
                    $this->messageBody = str_replace(' ' . $hashTag . ' ', ' #' . $hashTag . ' ', $this->messageBody);
                }

            } else {

                if ($this->doesntBreakMessageLength(' #' . $hashTag)) {
                    $this->append(' #' . $hashTag);
                }

            }

        }

        return $this->messageBody;
    }


    private function parseHashTags()
    {
        if (empty($this->post->hashtags)) {
            return [];
        }

        return explode(',', $this->post->hashtags);
    }


    private function addUrlToMessage()
    {
        if ( ! empty($this->post->url)) {
            $this->append($this->post->url);
        }

    }


    private function addTitleToMessage()
    {
        if ( ! empty($this->post->title)) {
            $this->prepend($this->post->title . ' ');
        }
    }

    private function prepend($text)
    {
        $this->messageBody = $text . $this->messageBody;
    }

    private function append($text)
    {
        $this->messageBody .= $text;
    }


    private function doesntBreakMessageLength($string)
    {
        return (strlen($string . ' ' . $this->messageBody) <= $this->maxCharacters);
    }
}