<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = ['flight_number', 'departure_airport_id', 'arrival_airport_id', 'aircraft_id', 'base_price', 'capacity'];

    // A flight belongs to a departure airport
    public function departureAirport()
    {
        return $this->belongsTo(Airport::class, 'departure_airport_id');
    }

    // A flight belongs to an arrival airport
    public function arrivalAirport()
    {
        return $this->belongsTo(Airport::class, 'arrival_airport_id');
    }

    // A flight belongs to an aircraft
    public function aircraft()
    {
        return $this->belongsTo(Aircraft::class);
    }

    // A flight can have many schedules
    public function schedules()
    {
        return $this->hasMany(FlightSchedule::class);
    }
}