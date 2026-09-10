<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityDeposit extends Model
{
    //
    public function rentals()
    {
        return $this->belongsTo(Rental::class);
    }
}
