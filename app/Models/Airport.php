<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'city', 'country', 'iata_code'];

    // An airport can have many departing flights
    public function departingFlights()
    {
        return $this->hasMany(Flight::class, 'departure_airport_id');
    }

    // An airport can have many arriving flights
    public function arrivingFlights()
    {
        return $this->hasMany(Flight::class, 'arrival_airport_id');
    }
}