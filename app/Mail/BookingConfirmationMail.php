<?php

namespace App\Mail;

use App\Models\ToursPackages;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $booking;
    protected $toursPackage;


    /**
     * Create a new message instance.
     */
    public function __construct($booking)
    {
        //
        $this->booking=$booking;
        $this->toursPackage = ToursPackages::find($this->booking->tours_packages_id);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: ' Booking Confirmation ',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.bookingconfirmation',
            with: [
                'user_name' => $this->booking->user_name,
                'tours_package' => $this->toursPackage,
                'checkin_date' => $this->booking->checkin_date,
                'checkout_date' => $this->booking->checkout_date,
                'total_adults' => $this->booking->total_adults,
                'total_children' => $this->booking->total_children,
                'total_price' => $this->booking->calculateTotalPrice()


            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [

        ];
    }
}
