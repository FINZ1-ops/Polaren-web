<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'rental_id',
        'type',
        'amount',
        'method',
        'status',
        'proof_image',
    ];

    protected function casts(): array
    {
        return [
            'paid_at' => 'datetime',
        ];
    }

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
}
