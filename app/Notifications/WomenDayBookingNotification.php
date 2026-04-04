<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\WomansDayBooking;

class WomenDayBookingNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(WomansDayBooking $womans_day_booking)
    {
        $this->womans_day_booking = $womans_day_booking;
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
            ->subject("New Women's Day Booking")
            ->greeting('Hello!')
            ->line("You have a new booking for women's day.")
            ->line('Name:- ' . $this->womans_day_booking->name)
            ->line('Phone:- ' . $this->womans_day_booking->phone)
            ->line('Address:- ' . $this->womans_day_booking->address)
            ->line('Preferred Time:- ' . $this->womans_day_booking->arrival_time)
            ->line('Appointments For:- ')
            ->line($this->womans_day_booking->gynecologist==1?'Gynocology Service':'')
            ->line($this->womans_day_booking->dermatologist==1?'Dermatology Service':'')
            ->line($this->womans_day_booking->hydra_facial==1?'Hydra Facial Service':'')
            ->line($this->womans_day_booking->hair_treatment==1?'Hair Treatment Service':'')
            ->line($this->womans_day_booking->micro_needling==1?'Micro Needling Service':'')
            ->line($this->womans_day_booking->carbon_peeling==1?'Carbon Peeling Service':'')
            ->action('View Details', route('womans-day-bookings.show', $this->womans_day_booking->id))
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
