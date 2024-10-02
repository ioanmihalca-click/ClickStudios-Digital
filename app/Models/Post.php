<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titlu', 'slug', 'continut', 'imagine_principala', 'meta_titlu', 'meta_descriere', 'published_at', 'audio_cloudinary_id'
    ];

    protected $dates = ['created_at', 'updated_at', 'published_at'];
    protected $casts = ['published_at' => 'datetime'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getAudioUrlAttribute()
    {
        if ($this->audio_cloudinary_id) {
            try {
                $cloudName = env('CLOUDINARY_CLOUD_NAME');
                $url = "https://res.cloudinary.com/{$cloudName}/video/upload/{$this->audio_cloudinary_id}.mp3";
                Log::info('Audio URL generated:', ['url' => $url]);
                return $url;
            } catch (\Exception $e) {
                Log::error('Error generating Audio URL:', [
                    'error' => $e->getMessage(),
                    'audio_cloudinary_id' => $this->audio_cloudinary_id
                ]);
                return null;
            }
        }
        Log::info('No audio_cloudinary_id available');
        return null;
    }

}