<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    protected $fillable = [
        'conversation_id',
        'sender_id',
        'body',
    ];

    public function casts()
    {
        return [
            'read_at',
        ];
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
