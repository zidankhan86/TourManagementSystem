<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function ratings()
    {
    return $this->hasMany(FlightRating::class);
    }
    public function averageRating()
    {
        return $this->ratings->avg('rating');
    }
}
