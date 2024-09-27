<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'is_active', 'unsubscribe_token'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($subscriber) {
            $subscriber->unsubscribe_token = Str::random(32);
        });
    }
}