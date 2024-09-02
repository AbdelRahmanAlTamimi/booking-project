<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    use HasFactory;
    protected $table = 'flights';

    protected $primaryKey = 'flight_id';
    protected $fillable = [
        'from_location',
        'to_location',
        'departure_datetime',
        'arrival_datetime',
        'duration',
        'available_seats',
        'plane_id',
    ];
    // public function Planes()
    // {
    //     return $this->belongsTo(Planes::class);
    // }
    public function Seats()
    {
        return $this->hasMany(Seats::class, 'flight_id', 'flight_id');
    }
    public function plane()
    {
        return $this->belongsTo(Planes::class, 'plane_id', 'plane_id');
    }
}
