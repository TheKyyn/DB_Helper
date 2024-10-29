<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchInfo extends Model
{
    protected $table = 'matches';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'date',
        'opponent',
        'location',
        'created_at',
    ];

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = (string) \Illuminate\Support\Str::uuid();
        });
    }
}


