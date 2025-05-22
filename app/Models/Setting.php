<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    protected $fillable = ['key', 'label', 'judul', 'value', 'picture', 'type', 'post_as'];

    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('picture') && ($model->getOriginal('picture') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('picture'));
            }
        });
    }
}

