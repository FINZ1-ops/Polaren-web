<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DamageClaimEvidence extends Model
{
    const UPDATED_AT = null;

    protected $table = 'damage_claim_evidence';

    protected $fillable = [
        'damage_claim_id',
        'type',
        'path',
        'description',
    ];

    public function damageClaim()
    {
        return $this->belongsTo(DamageClaim::class);
    }
}
