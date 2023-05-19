<?php

namespace App\Http\Controllers;

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



}
