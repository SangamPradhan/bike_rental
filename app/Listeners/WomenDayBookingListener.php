<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\WomenDayBookingNotification;
use App\Models\User;
use Illuminate\Support\Facades\Notification;

class WomenDayBookingListener
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
        $booking = $event->womans_day_booking;
        $user = User::where('email','clinic.Goldenspa@gmail.com')->first();
        Notification::send($user, new WomenDayBookingNotification($booking));
    }
}
