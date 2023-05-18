<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function tours(){

        $tours = Tour::all();
        return view('frontend.pages.tour',compact('tours'));
    }
}
