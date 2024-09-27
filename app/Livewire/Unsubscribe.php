<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subscriber;
use Livewire\Attributes\Layout;

#[Layout('layouts.blog')] 
class Unsubscribe extends Component
{
    public $token;
    public $subscriber;
    public $unsubscribed = false;
    public $error = false;

    public function mount($token)
{
    $this->token = $token;
    $this->subscriber = Subscriber::where('unsubscribe_token', $this->token)->first();

    if (!$this->subscriber) {
        $this->error = true;
    }
}

    public function unsubscribe()
    {
        if ($this->subscriber && $this->subscriber->is_active) {
            $this->subscriber->update(['is_active' => false]);
            $this->unsubscribed = true;
        } elseif ($this->subscriber) {
            $this->error = 'Sunteți deja dezabonat.';
        } else {
            $this->error = 'Token de dezabonare invalid.';
        }
    }

    public function resubscribe()
    {
        if ($this->subscriber && !$this->subscriber->is_active) {
            $this->subscriber->update(['is_active' => true]);
            $this->unsubscribed = false;
        }
    }

    public function render()
    {
        return view('livewire.unsubscribe');
       
    }
}