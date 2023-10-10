<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelBook extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function HotelBook(){
        return $this->belongsTo(Hotel::class,'hotel_id','id');
    }
    
    public function UserRelation(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
