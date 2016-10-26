<?php

namespace App\Console\Commands\Quantified;

use Illuminate\Console\Command;
use App\Messages\TwitterPublisher;

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
        $this->twitter->retrieve();
    }
}
