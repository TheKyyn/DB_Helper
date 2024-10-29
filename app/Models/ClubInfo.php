<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClubInfo extends Model
{
    protected $table = 'club_info';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'description',
        'location',
        'created_at',
    ];

    protected static function boot(): void
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = (string) \Illuminate\Support\Str::uuid();
        });
    }
}

