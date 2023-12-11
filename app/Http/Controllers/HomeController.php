<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Flight;
use App\Models\FlightBook;
use App\Models\Hotel;
use App\Models\HotelBook;
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
        $totalHotel =Hotel::get()->count();
        $totalHotelBook =HotelBook::get()->count();


        return view('backend.pages.home',compact('totalTour','totalSupportTour','totalUser','totalBooking'
        ,'totalHotel','totalHotelBook'));
    }
    public function search(Request $request)
    {
        $searchKey = $request->search_key;

    // Search in the Tour model
    $tourResults = Tour::where('tittle', 'LIKE', '%' . $searchKey . '%')
        ->orWhere('location', 'LIKE', '%' . $searchKey . '%')
        ->orWhere('from_date', 'LIKE', '%' . $searchKey . '%')
        ->get();

    // Search in the Hotel model
    $hotelResults = Hotel::where('name', 'LIKE', '%' . $searchKey . '%')
        ->orWhere('location', 'LIKE', '%' . $searchKey . '%')
        ->orWhere('rent', 'LIKE', '%' . $searchKey . '%')
        ->get();

    // Search in the Flight model (adjust as needed)
    $flightResults = Flight::where('name', 'LIKE', '%' . $searchKey . '%')
        ->orWhere('from', 'LIKE', '%' . $searchKey . '%')
        ->orWhere('date_time', 'LIKE', '%' . $searchKey . '%')
        ->get();

    // Return the results to the Blade view
    return view('frontend.pages.search', compact('tourResults', 'hotelResults', 'flightResults','searchKey'));
}

}

