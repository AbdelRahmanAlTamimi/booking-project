<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    protected $primaryKey = 'ticket_id';

    public $incrementing = true;

    protected $fillable = [
        'status',
        'price',
        'booking_date',
    ];

    protected $casts = [
        'booking_date' => 'date',
    ];
}
