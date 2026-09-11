<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'user_id',
        'equipment_id',
    ];

    public function equipment()
    {
        return $this->hasMany(Equipment::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
