<?php

namespace App\Mail;

use App\Models\Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Newsletter $newsletter)
    {
    }

    public function build()
    {
        $profileImageUrl = asset('assets/logo.jpg');
    
        return $this->subject($this->newsletter->subject)
                    ->view('emails.newsletter')
                    ->with([
                        'content' => $this->newsletter->content,
                        'profileImageUrl' => $profileImageUrl,
                    ]);
    }
}