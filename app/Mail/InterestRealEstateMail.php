<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Setting;
use App\Models\Project;


class InterestRealEstateMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    public function build()
    {
        $setting = Setting::first();
        $projectTitle = Project::where('id', $this->data['project_id'])->value('title');

        return $this->subject('اهتمام جديد بعقار من الموقع')
                    ->view('emails.interest_real_estate')
                    ->with([
                        'data' => $this->data,
                        'projectTitle' => $projectTitle, 
                        'logo' => asset($setting->logo),
                        // 'logo' => asset('' . $setting->logo),
                        // 'logo' => 'https://eamaraseer.sa/assets/img/logo-white.png',
                    ]);
    
    }


    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Interest Real Estate Mail',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
