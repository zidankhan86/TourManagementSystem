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
public function viewDetails($id){
  $toursData = Tour::find($id);
    return view('frontend.pages.viewMore.viewDetails',compact('toursData'));
}

public function bookNow(){
    return view('frontend.pages.bookNow.bookNow');
}

}
