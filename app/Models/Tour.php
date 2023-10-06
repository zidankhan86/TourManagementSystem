<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function ratings()
    {
    return $this->hasMany(Rating::class);
    }
    public function averageRating()
    {
        return $this->ratings->avg('rating');
    }
}
