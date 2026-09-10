<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    //
    public function messages()
    {
        return $this->belongsTo(Message::class);
    }

    public function rentals()
    {
        return $this->belongsTo(Rental::class);
    }
}
