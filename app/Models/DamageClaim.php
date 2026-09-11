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

    protected function casts(): array
    {
        return [
            'resolved_at' => 'datetime',
        ];
    }

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function evidence()
    {
        return $this->hasMany(DamageClaimEvidence::class);
    }

    public function responses()
    {
        return $this->hasMany(DamageClaimResponse::class);
    }

    public function dispute()
    {
        return $this->hasOne(Dispute::class);
    }
}
