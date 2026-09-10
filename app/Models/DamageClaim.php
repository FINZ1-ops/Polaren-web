<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DamageClaim extends Model
{
    //

    public function rentals()
    {
        return $this->belongsTo(Rental::class);
    }

    public function damage_claim_evidence()
    {
        return $this->belongsTo(DamageClaimEvidence::class);
    }

    public function damage_claim_responses()
    {
        return $this->belongsTo(DamageClaimResponse::class);
    }

    public function disputes()
    {
        return $this->belongsTo(Dispute::class);
    }
}
