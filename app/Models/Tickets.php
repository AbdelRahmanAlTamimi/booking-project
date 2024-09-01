<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;
    protected $primaryKey = 'ticket_id';
    protected $keyType = 'string'; 

    protected $fillable = [
        'passenger_id',
        'seat_id',
        'price',
        'status',
        'booking_date'
    ];
    public function seat()
    {
        return $this->belongsTo(Seats::class, 'seat_id', 'seat_id');
    }
    public function passenger()
    {
        return $this->belongsTo(Passengers::class, 'passenger_id', 'passenger_id');
    }
}
