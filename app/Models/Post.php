<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titlu', 'slug', 'continut', 'imagine_principala', 'meta_titlu', 'meta_descriere', 'published_at', 'audio_cloudinary_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'published_at', 
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getAudioUrlAttribute()
    {
        if ($this->audio_cloudinary_id) {
            return Cloudinary::getUrl($this->audio_cloudinary_id, [
                "resource_type" => "video",
                "flags" => "waveform",
                "format" => "mp3"
            ]);
        }
        return null;
    }
}