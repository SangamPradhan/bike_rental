<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use App\Notifications\InternationalBookingNotification;
use Illuminate\Support\Facades\Notification;

class InternationalBookingListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $booking = $event->international_booking;
        $user = User::where('email','clinic.Goldenspa@gmail.com')->first();
        Notification::send($user, new InternationalBookingNotification($booking));
    }
}
