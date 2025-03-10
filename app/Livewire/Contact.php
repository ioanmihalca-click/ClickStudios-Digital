<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

#[Title('Contact | Click Studios Digital')]
class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    public $success = false;
    public $error = false;

    protected function rules()
    {
        return [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'nullable|min:10|max:15',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:10|max:2000',
        ];
    }

    public function submit()
    {
        $this->validate();

        try {
            // Trimite email
            Mail::to('contact@clickstudios-digital.com')->send(new ContactFormMail(
                $this->name,
                $this->email,
                $this->phone,
                $this->subject,
                $this->message
            ));

            // Resetează formularul
            $this->reset(['name', 'email', 'phone', 'subject', 'message']);

            // Afișează mesajul de succes
            $this->success = true;
            $this->error = false;
        } catch (\Exception $e) {
            $this->error = true;
            $this->success = false;
        }
    }

    public function render()
    {
        // Get current locale
        $locale = App::getLocale();

        return view('livewire.contact');
    }
}
