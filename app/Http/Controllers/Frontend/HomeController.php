<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\TourSupport;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing(){

        $tours = Tour::all();
        $tourSupport = TourSupport::all();
        return view('frontend.pages.home',compact('tours','tourSupport'));
    }
    public function aboutUs(){
        return view('frontend.pages.about.about');
    }

}
