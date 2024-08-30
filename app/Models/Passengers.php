<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passengers extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Tickets()
    {
        return $this->hasMany(Tickets::class);
    }
}
