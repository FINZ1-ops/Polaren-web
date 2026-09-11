<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = [
        'rental_id',
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
