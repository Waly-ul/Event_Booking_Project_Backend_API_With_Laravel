<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'ticket_price', 'start_date', 'end_date', 'description'];
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    use HasFactory;
}
