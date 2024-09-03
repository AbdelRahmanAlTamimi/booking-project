<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
     protected $fillable = ['seat_number', 'flight_id', 'class', 'is_available'];

     public function Flights()
    {
        return $this->belongsTo(Flight::class);
    }
    public function booking()
    {
        return $this->hasMany(booking::class, 'seat_id', 'seat_id');
    }
}
