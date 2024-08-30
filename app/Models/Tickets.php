<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'price',
        'booking_date',
    ];
    public function Seats()
    {
        return $this->belongsTo(Seats::class);
    }
    public function Passengers()
    {
        return $this->belongsTo(Passengers::class);
    }
}
