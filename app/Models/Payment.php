<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

class Payment extends Model
{
    protected $fillable = [
        'rental_id',
        'type',
        'amount',
        'method',
        'status',
        'proof_image'
    ];

    #[Override]
    public function casts()
    {
        return [
            'paid_at',
        ];
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
