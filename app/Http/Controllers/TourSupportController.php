<?php

namespace App\Http\Controllers;

use App\Models\TourSupport;
use Illuminate\Http\Request;

class TourSupportController extends Controller
{
    public function tourSupport(){
        return view('backend.pages.moreService.TourSupportForm');
    }
    public function tourSupportStore(Request $request){

        //dd($request->all());

        TourSupport::create([

            "tittle"=>$request->tittle,
            "v_name"=>$request->v_name,
            "description"=>$request->description,
            "price"=>$request->price,
            "location_for"=>$request->location_for,
            "status"=>$request->status,
            "image"=>$request->image,

        ]);

        return back();


    }


}
