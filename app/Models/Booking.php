<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'flight_id',
        'passenger_id',
        'seat_number',
        'class',
        'booking_date',
        'flight_schedule_id'
        // Add other fields as needed
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function passenger()
    {
        return $this->hasOne(Passenger::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class, 'seat_id', 'seat_id');
    }
    

    public function aircraft()
    {
        return $this->belongsTo(Aircraft::class, 'plane_id', 'plane_id');
    }

    protected $casts = [
    'booking_date' => 'datetime',
];
}
