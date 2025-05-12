<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

class GeneralSetting extends Model
{
    protected $fillable = [
        'site_name',
        'logo',
        'dark_logo',
        'favicon',
        'email',
        'alt_email',
        'address',
        'alt_address',
        'phone',
        'alt_phone',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
    ];
    protected static function boot()
    {
        parent::boot();

        static::updated(function ($setting) {
            // Run optimize:clear when the model is updated
            Artisan::call('optimize:clear');
        });
    }
}
