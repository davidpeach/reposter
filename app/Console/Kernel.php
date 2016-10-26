<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use App\Console\Commands\Quantified\ImportTweets;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\Quantified\ImportSongsListenedTo;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\SendMessage::class,
        ImportSongsListenedTo::class,
        ImportTweets::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('messages:send-next')->everyMinute();

        $schedule->command('quantified:importmusic')->everyThirtyMinutes();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        // $this->command('build {project}', function ($project) {
        //     $this->info('Building project...');
        // });
    }
}
