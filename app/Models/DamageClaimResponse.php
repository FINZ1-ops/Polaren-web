<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DamageClaimResponse extends Model
{
    protected $fillable = [
        'damage_claim_id',
        'user_id',
        'response',
        'message',
    ];

    public function damage_claims()
    {
        return $this->hasMany(DamageClaim::class);
    }
}
