<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class SendReminders extends Command implements SelfHandling
{
    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $signature = 'sendreminders';

    protected $description = 'Send SMS reminders';

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        echo 'Hello world';
        // where ($textsent == false && where date is NOW) -> send things

    }
}
