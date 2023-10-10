<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlightBook extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function FlightBook(){
        return $this->belongsTo(Flight::class,'flight_id','id');
    }

    public function UserRelation(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
