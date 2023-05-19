<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Tour;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
            "description"=>'required',
            "location"=>'required'

        ]);

        $imageName = null;
        if($request->hasFile('image')){

           $imageName = date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->storeAs('/uploads',$imageName);
        }



        // dd($request->all());
        Tour::create([
            "tittle"=>$request->tittle,
            "location"=>$request->location,
            "price"=>$request->price,
            "description"=>$request->description,
            "duration"=>$request->duration,
            "image"=>$imageName,
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

        $request->validate([

            "tittle"=>'required',
            "price"=>'required',
            "description"=>'required',
            "location"=>'required']);


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
    Alert::success('Success','Updated');
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


}
