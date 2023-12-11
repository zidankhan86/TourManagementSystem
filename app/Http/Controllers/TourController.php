<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\FlightBook;
use App\Models\HotelBook;
use App\Models\Rating;
use App\Models\Tour;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

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

    //dd($request->all());
        $validator = Validator::make($request->all(), [
            "tittle"=>'required',
            "price"=>'required',
            "description"=>'required',
            "location"=>'required',
            "seat_count"=>'required|integer|min:1',
             'from_date' => 'required',
             'to_date' => 'required',
        ]);

        if ($validator->fails()) {

            Alert::error('Error ', 'Something went wrong!');
            return back();
        } else {
            Alert::success('Success ', 'Valid Date');
        }


        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $imageName, 'public');
        }

        //dd('$request->all()');
        Tour::create([
            "tittle"=>$request->tittle,
            "location"=>$request->location,
            "price"=>$request->price,
            "description"=>$request->description,
            "duration"=>$request->duration,
            "image"=>$imageName,
            "seat_count"=>$request->seat_count,
            "from_date"=>$request->from_date,
            "to_date"=>$request->to_date
        ]);

        Alert::success('Success ', 'Tour Added');

        return redirect()->back()->with("message","Success");

    }

    public function tourDelete($id){

        $deleteTour = Tour::find($id)->delete();


        Alert::success('Success','Deleted');
        return redirect()->back();
    }

    public function tourEdit($id){
        $tour = Tour::find($id);
        return view('backend.pages.tour.tourEdit',compact('tour'));
    }
    public function tourUpdate(Request $request ,$id){

// dd($request->all());

    $tourUpdate = Tour::find($id);
    $imageName = null;
    if($request->hasFile('image')){

       $imageName = date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
       $request->file('image')->storeAs('/uploads',$imageName);
    }

    $tourUpdate->Update([
        "tittle"=>$request->tittle,
        "location"=>$request->location,
        "price"=>$request->price,
        "description"=>$request->description,
        "duration"=>$request->duration,
        "image"=>$imageName,
        "from_date"=>$request->from_date,
        "to_date"=>$request->to_date
    ]);
    Alert::success('Success','edited');
    return redirect()->back();
}

public function tourView($id){

    $tourView = Tour::find($id);


    return view('backend.pages.tour.view',compact('tourView'));

}
public function bookingList(){

    $bookings = Book::all();
    return view('backend.pages.book.booking',compact('bookings'));
}
public function myProfile(){
    return view('backend.pages.profile.profile');
}


//Customer Profile
public function CustomerProfile(){
    //tour
    $bookTour = Book::with('BookRelation','UserRelation')->where('user_id',auth()->user()->id)->get();
    //hotel
    $bookHotel = HotelBook::with('HotelBook','UserRelation')->where('user_id',auth()->user()->id)->get();


    return view('backend.pages.profile.profileCustomer' ,compact('bookTour','bookHotel'));      
}

public function storeRating(Request $request, $id)
{
    //dd($request->all());
    $request->validate([
        'rating'=>'required'
    ]);
    $tour = Tour::find($id);

    $rating = new Rating();
    $rating->tour_id = $tour->id;
    $rating->rating = $request->input('rating');
    $rating->save();


    Alert::success('Thank you for your feedback.');
    return back();
}


}
