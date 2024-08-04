<?php

namespace App\Livewire;

use App\Models\Tag;
use Livewire\Component;

class TagShow extends Component
{
    public Tag $tag;

    public function mount(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function render()
    {
        return view('livewire.tag-show')
        ->layout('layouts.blog');
    }
}
