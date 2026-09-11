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

    public function damageClaim()
    {
        return $this->belongsTo(DamageClaim::class);
    }

    public function openedBy()
    {
        return $this->belongsTo(User::class, 'opened_by');
    }

    public function resolvedBy()
    {
        return $this->belongsTo(User::class, 'resolved_by');
    }
}
