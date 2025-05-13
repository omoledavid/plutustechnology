<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Service extends Model
{
    protected $fillable = [
        'title',
        'desc',
        'image',
        'body',
        'slug'
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($service) {
            $service->slug = Str::slug($service->topic);
        });
    }
}
