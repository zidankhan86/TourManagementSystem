<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\FlightRating;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class FlightController extends Controller
{
    public function flightForm(){
        return view('backend.pages.flight.flight');
    }


    public function flightStore(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            "name"=>'required',
             "price"=>'required',
            "from"=>'required',
            "to"=>'required',
            "image"=>'required',
            "ticket"=>'required',
            "time"=>'required',
            "class"=>'required',
            'cabin' => 'required',
            'date_time' => 'required',
            'checkin' => 'required',


        ]);

        if ($validator->fails()) {

            Alert::error('Error ', 'Something went wrong!');
            return back();
        } else {
            Alert::success('Success ', 'Flight Added');
        }


        $imageName = null;
        if($request->hasFile('image')){

           $imageName = date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->storeAs('/uploads',$imageName);
        }
        Flight::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'from'=>$request->from,
            'to'=>$request->to,
            'image'=>$imageName,
            'ticket'=>$request->ticket,
            'time'=>$request->time,
            'class'=>$request->class,
            'cabin'=>$request->cabin,
            'checkin'=>$request->checkin,
            'date_time'=>$request->date_time,

        ]);
        return back();
    }

    public function flight(){
        $flight = Flight::all();
        return view('frontend.pages.flight',compact('flight'));
    }

    public function flightView($id){
       $flights = Flight::find($id);
        return view('frontend.pages.flightDetails',compact('flights'));
    }

    public function bookFlight($id){
        //dd($id);
        $book = Flight::find($id);
        return view('frontend.pages.bookFlight',compact('book'));
    }

    public function storeRatingFlight(Request $request, $id)
{
    //dd($request->all());
    $request->validate([
        'rating'=>'required'
    ]);
    $flight = Flight::find($id);

    $rating = new FlightRating();
    $rating->flight_id = $flight->id;
    $rating->rating = $request->input('rating');
    $rating->save();


    Alert::success('Thank you for your feedback.');
    return back();
}
public function flightList(){
    $flight = Flight::all();
    return view('backend.pages.flight.list',compact('flight'));
}

public function flightDelete($id){
    $delete = Flight::find($id);
    $delete->delete();
    Alert::success('Deleted Successfully');
    return back();
}
public function bookingListFlight(){
    $bookings = Flight::all();
    return view('backend.pages.book.flightBooking',compact('bookings'));
}

}
