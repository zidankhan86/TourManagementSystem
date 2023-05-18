<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\TourSupport;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function tours(){

        $tours = Tour::all();
        return view('frontend.pages.tour',compact('tours'));
    }

    public function moreSupport(){
       $tours = TourSupport::all();
        return view('frontend.pages.tourSupport',compact('tours'));
    }
public function viewDetails(){
    return view('frontend.pages.viewMore.view Details');
}

}
