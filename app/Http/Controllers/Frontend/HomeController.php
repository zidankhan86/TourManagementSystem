<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing(){

        $tours = Tour::all();
        return view('frontend.pages.home',compact('tours'));
    }
}
