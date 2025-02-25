<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminNotificationMail extends Mailable
{
    use Queueable, SerializesModels;


    public $subject;
    public $messageContent;

    /**
     * Create a new message instance.
     */
    public function __construct($subject, $messageContent)
    {
        //
        $this->subject = $subject;
        $this->messageContent = $messageContent;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Admin Notification Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }


    /**
     * Build the message.
     */
    public function build()
    {
        // return $this->subject($this->subject)
        // ->html('<h2>إشعار جديد</h2><p>' . $this->messageContent . '</p>');

        return $this->subject($this->subject)
                    ->view('emails.admin_email')
                    ->with([
                        'messageContent' => $this->messageContent,
                    ]);
    }
}
