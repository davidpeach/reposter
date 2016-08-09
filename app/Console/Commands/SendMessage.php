<?php

namespace App\Console\Commands;

use App\Messages\MessageSender;
use Illuminate\Console\Command;

class SendMessage extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'messages:send-next';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for any messages that need to go out.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(MessageSender $messageSender)
    {
        return $messageSender->send();
    }

}
