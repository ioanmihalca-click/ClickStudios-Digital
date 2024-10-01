<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

#[Layout('layouts.blog')]
class PostList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.post-list', [
            'posts' => Post::latest()->simplepaginate(3),
        ]);
    }
}