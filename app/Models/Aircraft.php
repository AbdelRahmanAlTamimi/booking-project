<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    use HasFactory;

    protected $fillable = ['registration_number', 'model', 'manufacturer', 'total_seats', 'economy_seats', 'business_seats', 'first_class_seats', 'manufacture_date', 'last_maintenance_date', 'is_active'];

    // An aircraft can have many flights
    public function flights()
    {
        return $this->hasMany(Flight::class);
    }
}