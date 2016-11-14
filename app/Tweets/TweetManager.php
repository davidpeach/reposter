<?php

namespace App\Tweets;

use StdClass;
use Carbon\Carbon;
use App\Tweets\Tweet;
use App\Tweets\TweetContext;
use App\Locations\LocationPersistors\TweetLocationPersistor;

class TweetManager
{
    public static function save($tweet)
    {
        $newTweet = new Tweet;

        if ($context = self::handleTweetReplyContext($tweet))
        {
            $newTweet->context_id = $context->id;
        }

        if ($location = self::handleTweetLocation($tweet))
        {
            $newTweet->location_id = $location->id;
        }

        $newTweet->uid = $tweet->id;
        $newTweet->timestamp = new Carbon($tweet->created_at);
        $newTweet->content = utf8_encode($tweet->text);

        $newTweet->save();
    }

    public static function handleTweetLocation($tweet)
    {
        $locationData = new StdClass;

        if (is_null($tweet->place)) {
            return false;
        }

        $locationData = (object) array_merge((array) $locationData, (array) $tweet->place);

        if ( ! is_null($tweet->geo)) {
            $locationData = (object) array_merge((array) $locationData, ['lat' => $tweet->geo->coordinates[0], 'lng' => $tweet->geo->coordinates[1]]);
        }

        return with( new TweetLocationPersistor($locationData))->ensureExistsAndReturn();
    }

    // @dptodo
    public static function handleTweetReplyContext($tweet)
    {
        if ($tweet->in_reply_to_status_id) {

            return TweetContext::create([
                'uid' => $tweet->in_reply_to_status_id,
                'type' => 'reply',
            ]);
        }

        return false;
    }
}