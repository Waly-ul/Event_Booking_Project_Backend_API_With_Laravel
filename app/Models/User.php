<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasFactory;
    protected $fillable = ['role', 'name', 'email', 'password', 'profile_image'];
    public function bookings() : HasMany{
        return $this->hasMany(Booking::class);
    }

    public function notifications(): HasMany{
        return $this->hasMany(notification::class);
    }
    use HasFactory;

}
