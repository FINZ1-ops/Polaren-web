<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppNotification extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'data',
    ];

    public function casts()
    {
        return [
            'read_at',
        ];
    }

    public function users()
    {
        return $this->hasOne(User::class);
    }
}
