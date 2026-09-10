<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DamageClaimResponse extends Model
{
    //
    public function damage_claims()
    {
        return $this->belongsTo(DamageClaim::class);
    }
}
