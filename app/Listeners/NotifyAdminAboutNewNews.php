<?php

namespace App\Listeners;

use App\Events\NewNewsAddedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\NewNewsAddedNotification;
use App\Models\User;

class NotifyAdminAboutNewNews
{
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
     * @param  \App\Events\NewNewsAddedEvent  $event
     * @return void
     */
    public function handle(NewNewsAddedEvent $event)
    {
        $message = $event->message;

          // Get dmin
          $adminMember = User::role('admin')->get();

          // Send notification to each admin member
          foreach ($adminMember as $admin) {
              $admin->notify(new NewNewsAddedNotification($message));
          }
    }
}
