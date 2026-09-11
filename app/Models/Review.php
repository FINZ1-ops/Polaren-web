<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'rental_id',
        'reviewer_id',
        'reviewee_id',
        'type',
        'rating',
        'comment',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
