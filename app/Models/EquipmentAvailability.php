<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipmentAvailability extends Model
{
    protected $table = 'equipment_availability';

    protected $fillable = [
        'equipment_id',
        'start_date',
        'end_date',
        'reason',
        'notes',
    ];

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
