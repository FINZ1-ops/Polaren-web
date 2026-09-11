<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar',
        'city',
        'role',
        'rating_avg',
        'rating_count',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'rating_avg' => 'decimal:2',
            'is_active' => 'boolean',
        ];
    }

    public function equipment()
    {
        return $this->hasMany(Equipment::class, 'owner_id');
    }

    public function rentalsAsOwner()
    {
        return $this->hasMany(Rental::class, 'owner_id');
    }

    public function rentalsAsRenter()
    {
        return $this->hasMany(Rental::class, 'renter_id');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function notifications()
    {
        return $this->hasMany(AppNotification::class);
    }

    public function reviewsGiven()
    {
        return $this->hasMany(Review::class, 'reviewer_id');
    }

    public function reviewsReceived()
    {
        return $this->hasMany(Review::class, 'reviewee_id');
    }
}
