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


    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // markdown: 'emails.bookings',
            // with:[
            //     'data' => $this->bookings,
            //     'booking_link' => URL::route('bookings.show', $this->bookings->id)
            // ]
            view: 'emails.bookings',
        );
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->markdown('emails.bookings');
    // }
    // public function build()
    // {
    //     return $this->subject('Appointment Confirmation - Golden Spa')
    //                 ->markdown('emails.bookings', ['details' => $this->details]);
    // }
    public function build()
    {
        return $this->subject('Appointment Confirmation - Gratifying Spa')
                    ->view('emails.bookings')
                    ->with('details', $this->details);
    }
}
