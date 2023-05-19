<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Tour;
use App\Models\TourSupport;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $totalTour = Tour::get()->count();
        $totalSupportTour = TourSupport::get()->count();
        $totalUser = User::get()->count();
        $totalBooking =Book::get()->count();
        return view('backend.pages.home',compact('totalTour','totalSupportTour','totalUser','totalBooking'));
    }


}
