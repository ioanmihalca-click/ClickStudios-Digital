<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'titlu', 'slug', 'continut', 'imagine_principala', 'meta_titlu', 'meta_descriere', 'published_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'published_at', 
    ];

    protected $casts = [
        'published_at' => 'datetime', // Add this line
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
