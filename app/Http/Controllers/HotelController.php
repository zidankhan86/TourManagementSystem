<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelRating;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
   public function hotel(){

    $hotels = Hotel::paginate(10);
    return view('frontend.pages.hotel',compact('hotels'));
   }

   public function hotelForm(){
    return view('backend.pages.hotel.hotelForm');
   }
   public function hotelStore(Request $request){
   //dd($request->all());
    $validator = Validator::make($request->all(), [
        "name"=>'required',
        "room_title"=>'required',
        "location"=>'required',
        "facilities"=>'required',
        "location"=>'required',
        "capacity"=>'required',
         'no_of_room' => 'required',
         'rent' => 'required',
         'description' => 'required',
         'image' => 'required',
         'room_image'=>'required',
         'status' => 'required',
    ]);

    if ($validator->fails()) {

        Alert::error('Error ', 'Something went wrong!');
        return back();
    } else {
        Alert::success('Success ', 'Hotel Added');
    }

    if ($request->hasFile('image')) {
        $hotelImageName = date('YmdHis') . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('uploads', $hotelImageName);
    }

    // Handle room image
    if ($request->hasFile('room_image')) {
        $roomImageName = date('YmdHis') . '_' . $request->file('room_image')->getClientOriginalName();
        $request->file('room_image')->storeAs('uploads', $roomImageName);
    }

    Hotel::create([
        'name' => $request->input('name'),
        'location' => $request->input('location'),
        'facilities' => $request->input('facilities'),
        'room_title' => $request->input('room_title'),
        'capacity' => $request->input('capacity'),
        'no_of_room' => $request->input('no_of_room'),
        'rent' => $request->input('rent'),
        'description' => $request->input('description'),
        'status' => $request->input('status'),
        'image' => isset($hotelImageName) ? $hotelImageName : null,
        'room_image' => isset($roomImageName) ? $roomImageName : null,
    ]);

    return back();


   }

   public function hotelDetails($id){
    $hotels = Hotel::find($id);
    return view('frontend.pages.hotelDetails',compact('hotels'));
   }

   public function storeRatingHotel(Request $request, $id)
{
    //dd($request->all());
    $request->validate([
        'rating'=>'required'
    ]);
    $hotel = Hotel::find($id);

    $rating = new HotelRating();
    $rating->hotel_id = $hotel->id;
    $rating->rating = $request->input('rating');
    $rating->save();


    Alert::success('Thank you for your feedback.');
    return back();
}

public function hotelList(){
    $hotel = Hotel::all();
    return view('backend.pages.hotel.list',compact('hotel'));
}

public function hotelDelete($id){
    $delete= Hotel::find($id);
    $delete->delete();
    Alert::success('Deleted Successfully');
    return back();
}

public function bookingListHotel(){
    $hotel = Hotel::all();
    return view('backend.pages.book.hotelBooking',compact('hotel'));
}

}
