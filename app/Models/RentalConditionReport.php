<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalConditionReport extends Model
{
    //
    public function rental_condition_items()
    {
        return $this->belongsTo(RentalConditionItem::class);
    }

    public function rental_condition_images()
    {
        return $this->belongsTo(RentalConditionImage::class);
    }
}
