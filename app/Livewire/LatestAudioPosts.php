<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class LatestAudioPosts extends Component
{
    public $latestPosts;

    public function mount()
    {
        $this->latestPosts = Post::where('audio_cloudinary_id', '!=', null)
            ->latest('published_at')
            ->take(3)
            ->get(['id', 'titlu', 'slug', 'imagine_principala', 'published_at']);
    }

    public function render()
    {
        return view('livewire.latest-audio-posts');
    }
}