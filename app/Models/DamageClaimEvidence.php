<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DamageClaimEvidence extends Model
{
    protected $fillable = [
        'damage_claim_id',
        'type',
        'path',
        'description',
    ];

    public function damage_claims()
    {
        return $this->hasMany(DamageClaim::class);  
    }
}
