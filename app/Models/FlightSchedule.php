<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['flight_id', 'day_of_week', 'departure_time', 'arrival_time', 'effective_from', 'effective_to', 'is_active'];

    // A schedule belongs to a flight
    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}