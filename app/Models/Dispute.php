<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dispute extends Model
{
    protected $fillable = [
        'rental_id',
        'damage_claim_id',
        'opened_by',
        'reason',
        'status',
        'resolution',
        'resolved_by',
    ];

    public function casts()
    {
        return [
            'resolved_at',
        ];
    }

    public function damage_claims()
    {
        return $this->hasMany(DamageClaim::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
