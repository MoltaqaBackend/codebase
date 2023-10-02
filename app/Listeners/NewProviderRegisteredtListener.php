<?php

namespace App\Listeners;

use App\Events\NewProviderRegisteredEvent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewProviderRegisteredtListener implements ShouldQueue
{
    use Queueable;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param NewProviderRegisteredEvent $event
     * @return void
     */
    public function handle(NewProviderRegisteredEvent $event)
    {
    }
}
