<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $fillable = [
    'full_name',
    'date_of_birth',
    'passport_number'
];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function booking()
    {
        return $this->hasMany(Tickets::class, 'passenger_id');
    }
}
