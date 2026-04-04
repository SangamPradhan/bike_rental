<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\InternationalBooking;


class InternationalBookingNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(InternationalBooking $international_booking)
    {
        //
        $this->international_booking = $international_booking;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->from(config('mail.from.address'), config('mail.from.name'))
        ->subject('New International Booking')
        ->line('A new international booking has been made:')
        ->line('Name: ' . $this->international_booking->name)
       ->line('Phone: ' . "+".$this->international_booking->country_code . ' ' . $this->international_booking->phone)
   
        ->line('Email: ' . $this->international_booking->email)
   
        ->line('Appointment Type: ' . $this->international_booking->appointment_type)
        ->line('Country: ' . $this->international_booking->country)
        ->action('View International Booking', route('international-bookings.show', $this->international_booking->id))
        ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
