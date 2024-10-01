<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.post')]
class PostShow extends Component
{
    public Post $post;
    public $similarPosts;

    public function mount(Post $post)
    {
        $this->post = $post;

        // Căutăm postări similare pe baza etichetelor comune
        $this->similarPosts = Post::whereHas('tags', function ($query) {
            $query->whereIn('id', $this->post->tags->pluck('id'));
        })->where('id', '!=', $this->post->id)
          ->limit(5)  // or any other number you prefer
          ->get();
    }

    public function render()
    {
        return view('livewire.post-show');
    }
}
