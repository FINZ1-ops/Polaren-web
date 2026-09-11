<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalConditionReport extends Model
{
    protected $fillable = [
        'renta;_id',
        'type',
        'created_by',
        'notes',
    ];

    public function casts():array
    {
        return [
            'confirmed_at',
        ];
    }

    public function rental_condition_items()
    {
        return $this->hasOne(RentalConditionItem::class);
    }

    public function rental_condition_images()
    {
        return $this->hasOne(RentalConditionImage::class);
    }
}
