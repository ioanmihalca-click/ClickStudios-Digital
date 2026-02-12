<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contact | Click Studios Digital')]
class Contact extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $subject = '';

    public string $message = '';

    public string $website = '';

    public int $formLoadedAt = 0;

    public bool $success = false;

    public bool $error = false;

    public function mount(): void
    {
        $this->formLoadedAt = time();
    }

    /** @return array<string, string> */
    protected function rules(): array
    {
        return [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'nullable|min:10|max:15',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:10|max:2000',
        ];
    }

    public function submit(): void
    {
        if ($this->website !== '') {
            $this->success = true;
            $this->error = false;

            return;
        }

        if ((time() - $this->formLoadedAt) < 3) {
            $this->success = true;
            $this->error = false;

            return;
        }

        $rateLimitKey = 'contact-form:'.request()->ip();

        if (RateLimiter::tooManyAttempts($rateLimitKey, 3)) {
            $this->addError('message', 'Prea multe încercări. Vă rugăm să așteptați un minut.');

            return;
        }

        $this->validate();

        try {
            RateLimiter::hit($rateLimitKey, 60);

            Mail::to('contact@clickstudios-digital.com')->send(new ContactFormMail(
                $this->name,
                $this->email,
                $this->phone,
                $this->subject,
                $this->message
            ));

            $this->reset(['name', 'email', 'phone', 'subject', 'message']);
            $this->formLoadedAt = time();

            $this->success = true;
            $this->error = false;
        } catch (\Exception $e) {
            $this->error = true;
            $this->success = false;
        }
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.contact');
    }
}
