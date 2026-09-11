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

    public function rental_condition_reports()
    {
        return $this->hasMany(RentalConditionReport::class);
    }
}
