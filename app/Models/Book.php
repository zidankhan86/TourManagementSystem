<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function BookRelation(){
        return $this->belongsTo(Tour::class,'tour_id','id');
    }

    public function UserRelation(){
        return $this->belongsTo(User::class,'user_id','id');
    }


}
