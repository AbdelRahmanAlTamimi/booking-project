<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'total_seats',
    ];
    public function PlaneTypes()
    {
        return $this->belongsTo(PlaneTypes::class);
    }
    public function Flights()
    {
        return $this->hasMany(Flights::class);
    }
}
