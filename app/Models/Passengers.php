<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passengers extends Model
{
    use HasFactory;
    protected $table = 'passengers';
    protected $keyType = 'string'; // Set to 'string' if the primary key is a string
    protected $primaryKey = 'passenger_id'; // Set the primary key to 'passenger_id'

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function tickets()
    {
        return $this->hasMany(Tickets::class, 'passenger_id');
    }
}
