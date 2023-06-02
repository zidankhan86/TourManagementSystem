<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Book;
use App\Models\Tour;
use App\Models\TourSupport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

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

public function bookNow($id){

    // $tours  = Tour::find($id);
    $tours = Tour::findOrFail($id);

    return view('frontend.pages.bookNow.bookNow',compact('tours'));
}

public function bookNowStore(Request $request ,$id){

    $request->validate([

        'name'=>'required',
        'phone'=>'required',
        'email'=>'required',


    ]);

    //dd($request->all());

    //$id = $request->input('tour_id'); // Assuming you have a hidden input field with the tour ID in your form
    $tour = Tour::findOrFail($id);

    if ($tour->seat_count > 0) {
        $tour->seat_count--;
        $tour->save();
    }

    Book::create([

        "name"=>$request->name,
        "tour_id"=>$request->tour_id,
        "phone"=>$request->phone,
        "email"=>$request->email,
        "address"=>$request->address,
        "price" =>$request->amount,
        "currency" =>$request->currency,
        "status"=>"Pending"

    ]);
    Alert::success('Success ', 'Thank You For Booking ');
    return to_route('landing.page');
}

public function supportDetails($id){
    $toursData = TourSupport::find($id);
    return view('frontend.pages.viewMore.supportViewDetails',compact('toursData'));
}

}
