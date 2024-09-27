<?php

namespace App\Mail;

use App\Models\Newsletter;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Newsletter $newsletter, public Subscriber $subscriber)
    {
    }

    public function build()
    {
        $unsubscribeUrl = URL::signedRoute('unsubscribe', ['token' => $this->subscriber->unsubscribe_token]);

        $content = $this->newsletter->content . 
            '<p style="margin-top: 20px; font-size: 12px; color: #666;">' .
            'Dacă nu mai doriți să primiți aceste emailuri, vă puteți ' .
            '<a href="' . $unsubscribeUrl . '">dezabona aici</a>.' .
            '</p>';

        return $this->subject($this->newsletter->subject)
                    ->html($content);
    }
}