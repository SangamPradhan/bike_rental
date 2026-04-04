<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Booking;


class BookingNotification extends Notification
{
    use Queueable;
    public $booking;
    public $subject = 'New Booking Notification';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
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
        $genderOptions = ['male' => 'Male', 'female' => 'Female', 'other' => 'Other'];
        $appointmentTypeOptions = ['type1' => 'Hair', 'type2' => 'Skin', 'type3' => 'Specify Service'];

        return (new MailMessage)
                    ->from(config('mail.from.address'), config('mail.from.name'))
                    ->subject('New Booking')
                    ->line('A new booking has been made:')
                    ->line('Name: ' . $this->booking->name)
                    ->line('Phone: ' . $this->booking->phone)
                    // ->line('Subject: ' . $this->booking->subject)
                    // ->line('Message: ' . $this->booking->message)
                    ->line('Email: ' . $this->booking->email)
                    // ->line('Date of Birth: ' . $this->booking->dob)
                    ->line('Gender: ' . $genderOptions[$this->booking->gender])
                    ->line('Preferred Date: ' . $this->booking->preferred_date)
                    ->line('Preferred Time: ' . $this->booking->preferred_time)
                    ->line('Appointment Type: ' . $this->booking->appointment_type)
                    ->line('Preferred Doctor: ' . $this->booking->preferred_doctor)
                    ->action('View Booking', route('bookings.show', $this->booking->id))
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
