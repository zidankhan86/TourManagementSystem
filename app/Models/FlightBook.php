<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightBook extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function FlightBook(){
        return $this->belongsTo(Flight::class,'flight_id','id');
    }
}
