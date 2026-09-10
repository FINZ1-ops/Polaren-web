<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}
