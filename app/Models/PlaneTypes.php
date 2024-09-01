<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaneTypes extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_name',
    ];
    public function Planes()
    {
        return $this->hasMany(Planes::class);
    }
}
