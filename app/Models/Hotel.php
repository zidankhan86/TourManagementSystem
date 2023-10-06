<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $guarded = [];

    
    public function ratings()
    {
    return $this->hasMany(HotelRating::class);
    }

    public function averageRating()
    {
        return $this->ratings->avg('rating');
    }
}
