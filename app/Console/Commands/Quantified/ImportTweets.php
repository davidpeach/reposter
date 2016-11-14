<?php

namespace App\Console\Commands\Quantified;

use Exception;
use App\Tweets\TweetManager;
use Illuminate\Console\Command;
use App\Messages\TwitterPublisher;
use Illuminate\Support\Facades\Log;

class ImportTweets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quantified:importTweets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Latest of my tweets into dashboard';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(TwitterPublisher $twitter)
    {
        $this->twitter = $twitter;

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $tweets = $this->twitter->retrieveTweets();

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
