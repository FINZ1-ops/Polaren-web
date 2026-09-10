<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    //

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }

    public function security()
    {
        return $this->belongsTo(SecurityDeposit::class);
    }

    public function rental_condition_reports()
    {
        return $this->belongsTo(RentalConditionReport::class);
    }

    public function damage_claims()
    {
        return $this->belongsTo(DamageClaim::class);
    }

    public function payments()
    {
        return $this->belongsTo(Payment::class);
    }

    public function reviews()
    {
        return $this->belongsTo(Review::class);
    }

    public function conversations()
    {
        return $this->belongsTo(Conversation::class);
    }
}
