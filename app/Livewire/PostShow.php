<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

#[Layout('layouts.post')]
class PostShow extends Component
{
    public Post $post;
    public $similarPosts;
    public $audioUrl;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->audioUrl = $post->audio_url;

        Log::info('PostShow mount', [
            'post_id' => $post->id,
            'audio_cloudinary_id' => $post->audio_cloudinary_id,
            'audioUrl' => $this->audioUrl
        ]);

        $this->similarPosts = Post::whereHas('tags', function ($query) {
            $query->whereIn('id', $this->post->tags->pluck('id'));
        })->where('id', '!=', $this->post->id)
          ->limit(5)
          ->get();
    }

    public function render()
    {
        return view('livewire.post-show');
    }
}