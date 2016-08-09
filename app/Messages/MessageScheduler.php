<?php

namespace App\Messages;

use App\Post;
use App\Message;
use App\Messages\DetermineCorrectDate;

class MessageScheduler
{
    private $interval;

    public function __construct($interval)
    {
        $this->interval = $interval;
    }

    public function schedule()
    {
        $scheduledFor = with( new DetermineCorrectDate)
                                        ->fromDate($this->post->published_at)
                                        ->withInterval($this->interval)
                                        ->getScheduledDate();

        if ($scheduledFor < Carbon::now()) {
            return;
        }

        Message::create([
            'post_id' => $this->post->id,
            'scheduled_for' => $scheduledFor,
            ]);
    }

    public function for(Post $post)
    {
        $this->post = $post;

        return $this;
    }

}