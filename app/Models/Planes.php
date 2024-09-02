<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    use HasFactory;
    protected $primaryKey = 'plane_id'; // Ensure this matches the foreign key used in Flights

    protected $fillable = [
        'status',
        'total_seats',
        'model',
    ];
    public function PlaneTypes()
    {
        return $this->belongsTo(PlaneTypes::class);
    }
    public function flights()
    {
        return $this->hasMany(Flights::class, 'plane_id', 'plane_id');
    }
}
