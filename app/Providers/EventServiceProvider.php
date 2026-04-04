<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\WomenDayBookingEvent;
use App\Events\BookingEvent;
use App\Events\InternationalBookingEvent;
use App\Listeners\WomenDayBookingListener;
use App\Listeners\BookingListener;
use App\Listeners\InternationalBookingListener;
use App\Events\AdminSendMessage;
use App\Listeners\SendNotificationToStaff;
use App\Events\NewNewsAddedEvent;
use App\Listeners\NotifyAdminAboutNewNews;



class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        WomenDayBookingEvent::class =>[
            WomenDayBookingListener::class
        ],
        BookingEvent::class =>[
            BookingListener::class
        ],
        InternationalBookingEvent::class =>[
            InternationalBookingListener::class
        ],
        AdminSendMessage::class => [
            SendNotificationToStaff::class,
        ],
        NewNewsAddedEvent::class => [
            NotifyAdminAboutNewNews::class,
        ],
      
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
