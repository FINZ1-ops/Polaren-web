<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DamageClaimResponse extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'damage_claim_id',
        'user_id',
        'response',
        'message',
    ];

    public function damageClaim()
    {
        return $this->belongsTo(DamageClaim::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
