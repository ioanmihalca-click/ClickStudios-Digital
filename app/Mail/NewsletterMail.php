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
        return $this->subject($this->newsletter->subject)
                    ->html($this->newsletter->content);
    }
}