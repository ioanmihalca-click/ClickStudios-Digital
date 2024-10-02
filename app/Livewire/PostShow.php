<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

#[Layout('layouts.post')]
class PostShow extends Component
{
    public Post $post;
    public $similarPosts;
    public $audioUrl;

    public function mount(Post $post)
    {
        // Încărcăm eager relațiile necesare
        $this->post = $post->load(['tags']);
        $this->audioUrl = $this->post->audio_url;

        Log::info('PostShow mount', [
            'post_id' => $this->post->id,
            'audio_cloudinary_id' => $this->post->audio_cloudinary_id,
            'audioUrl' => $this->audioUrl
        ]);

        // Optimizăm încărcarea postărilor similare
        $this->loadSimilarPosts();
    }

    protected function loadSimilarPosts()
    {
        $tagIds = $this->post->tags->pluck('id');
    
        $this->similarPosts = Cache::remember("similar_posts.{$this->post->id}", now()->addHours(24), function () use ($tagIds) {
            return Post::with('tags')
                ->whereHas('tags', function ($query) use ($tagIds) {
                    $query->whereIn('id', $tagIds);
                })
                ->where('id', '!=', $this->post->id)
                ->select('id', 'titlu', 'slug', 'imagine_principala')
                ->limit(5)
                ->get();
        });
    }

    public function render()
    {
        return view('livewire.post-show');
    }
}