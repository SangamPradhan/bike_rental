<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\WomansDayBooking;

class WomansDayBookingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(WomansDayBooking $womans_day_booking)
    {
        $this->womans_day_booking = $womans_day_booking;
    }

     /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.womans-day-bookings',
            with:[
                'data' => $this->womans_day_bookings,
                'booking_url' => URL::route('womans-day-bookings.show', $this->womans_day_bookings->id)
            ]
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.womans-day-bookings');
    }
}
