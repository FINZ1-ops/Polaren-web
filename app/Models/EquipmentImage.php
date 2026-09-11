<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipmentImage extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'equipment_id',
        'path',
        'is_primary',
        'sort_order',
    ];

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
