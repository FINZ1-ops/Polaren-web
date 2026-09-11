<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityDeposit extends Model
{
    protected $fillable = [
        'rental_id',
        'amount',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'secured_at' => 'datetime',
            'released_at' => 'datetime',
        ];
    }

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
}
