<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalConditionImage extends Model
{
    //
    public function rental_condition_reports()
    {
        return $this->belongsTo(RentalConditionReport::class);
    }
}
