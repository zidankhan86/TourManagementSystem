<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function flightForm(){
        return view('backend.pages.flight.flight');
    }

    public function flight(){
        $products = Category::all();
        return view('frontend.pages.flight',compact('products'));
    }


}
