<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalConditionItem extends Model
{
    protected $fillable = [
        'condition_report_id',
        'item_name',
        'condition',
        'notes',
    ];

    public function conditionReport()
    {
        return $this->belongsTo(RentalConditionReport::class, 'condition_report_id');
    }
}
