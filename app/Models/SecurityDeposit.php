<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Override;

class SecurityDeposit extends Model
{
    protected $fillable = [
        'rental_id',
        'amount',
        'status',
    ];

    #[Override]
    public function casts():array
    {
        return [
            'secured_at',
            'released_at',
        ];
    }
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
