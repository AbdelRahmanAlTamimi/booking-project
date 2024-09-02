<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    use HasFactory;
    protected $primaryKey = 'seat_id'; // This should match the actual primary key in your table

    protected $fillable = [

        'seat_number',
        'seat_id',
        'seat_class',
        'flight_id',
    ];
    public function Flights()
    {
        return $this->belongsTo(Flights::class);
    }
    public function tickets()
    {
        return $this->hasMany(Tickets::class, 'seat_id', 'seat_id');
    }
}
