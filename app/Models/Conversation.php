<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = [
        'rental_id',
    ];
    public function messages()
    {
        return $this->hasOne(Message::class);
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}   
