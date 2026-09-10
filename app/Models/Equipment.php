<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = [
        'owner_id',
        'category_id',
        'name',
        'slug',
        'description',
        'brand',
        'model',
        'condition',
        'price_per_day',
        'deposit',
        'city',
        'status',
        'view_count',
        'rating_avg',
        'rating_count',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(EquipmentImage::class);
    }

    public function availabilityBlocks()
    {
        return $this->hasMany(EquipmentAvailability::class);
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}