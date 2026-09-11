<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalConditionImage extends Model
{
    protected $fillable = [
        'condition_report_id',
        'path',
        'caption'
    ];

    public function rental_condition_reports()
    {
        return $this->hasMany(RentalConditionReport::class);
    }
}
