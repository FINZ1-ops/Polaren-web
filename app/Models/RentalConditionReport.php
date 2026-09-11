<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalConditionReport extends Model
{
    protected $fillable = [
        'rental_id',
        'type',
        'created_by',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'confirmed_at' => 'datetime',
        ];
    }

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function items()
    {
        return $this->hasMany(RentalConditionItem::class, 'condition_report_id');
    }

    public function images()
    {
        return $this->hasMany(RentalConditionImage::class, 'condition_report_id');
    }
}
