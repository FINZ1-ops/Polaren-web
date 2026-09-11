<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'code',
        'equipment_id',
        'owner_id',
        'renter_id',
        'start_date',
        'end_date',
        'duration_days',
        'price_per_day_snapshot',
        'rental_price',
        'deposit_snapshot',
        'platform_fee_percent_snapshot',
        'platform_fee_amount',
        'total',
        'status',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'end_date' => 'date',
            'accepted_at' => 'datetime',
            'rejected_at' => 'datetime',
            'returned_at' => 'datetime',
            'completed_at' => 'datetime',
            'cancelled_at' => 'datetime',
        ];
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function renter()
    {
        return $this->belongsTo(User::class, 'renter_id');
    }

    public function securityDeposit()
    {
        return $this->hasOne(SecurityDeposit::class);
    }

    public function conditionReports()
    {
        return $this->hasMany(RentalConditionReport::class);
    }

    public function damageClaims()
    {
        return $this->hasMany(DamageClaim::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function conversation()
    {
        return $this->hasOne(Conversation::class);
    }

    public function disputes()
    {
        return $this->hasMany(Dispute::class);
    }
}