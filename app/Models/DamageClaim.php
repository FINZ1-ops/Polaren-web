<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DamageClaim extends Model
{
    protected $fillable = [
        'rental_id',
        'created_by',
        'category',
        'description',
        'requested_amount',
        'approved_amount',
        'status',
    ];
    
    public function casts()
    {
        return [
            'resolved_at',
        ];
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public function damage_claim_evidence()
    {
        return $this->hasOne(DamageClaimEvidence::class);
    }

    public function damage_claim_responses()
    {
        return $this->hasOne(DamageClaimResponse::class);
    }

    public function disputes()
    {
        return $this->hasOne(Dispute::class);
    }
}
