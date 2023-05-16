<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function tourList(){

        $tours = Tour::all();
        return view('backend.pages.tour.tourList',compact('tours'));
    }
    public function tourForm(){
        return view('backend.pages.tour.tourForm');
    }
    public function tourStore(Request $request){


        $request->validate([

            "tittle"=>'required',
            "price"=>'required',
            "description"=>'required'

        ]);



        // dd($request->all());
        Tour::create([
            "tittle"=>$request->tittle,
            "price"=>$request->price,
            "description"=>$request->description,
            "duration"=>$request->duration,
            "image"=>$request->image,


        ]);

        return back();

    }

}
