<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalConditionImage extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'condition_report_id',
        'path',
        'caption',
    ];

    public function conditionReport()
    {
        return $this->belongsTo(RentalConditionReport::class, 'condition_report_id');
    }
}
