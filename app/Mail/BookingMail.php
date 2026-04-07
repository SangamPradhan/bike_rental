<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Booking;

class BookingMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }


    public function build()
    {
        return $this->subject('Booking Confirmation - Bike Rental')
                    ->view('emails.bookings')
                    ->with('details', $this->details);
    }
}
