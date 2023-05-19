<?php

namespace App\Http\Controllers;

use App\Models\TourSupport;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TourSupportController extends Controller
{
    public function tourSupport(){
        return view('backend.pages.moreService.TourSupportForm');
    }
    public function tourSupportStore(Request $request){


        $request->validate([

      "tittle"=>'required',
      "v_name"=>'required',
      "location_for"=>'required',
      "price"=>'required',

        ]);



        //dd($request->all());


        $imageName = null;
        if($request->hasFile('image')){

           $imageName = date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->storeAs('/uploads',$imageName);
        }

        TourSupport::create([



            "tittle"=>$request->tittle,
            "v_name"=>$request->v_name,
            "description"=>$request->description,
            "price"=>$request->price,
            "location_for"=>$request->location_for,
            "status"=>$request->status,
            "image"=>$imageName,

        ]);
        Alert::success('Success','Tour Support Created');

        return back();


    }
    public function tourSupportList(){

        $supports = TourSupport::all();
        return view('backend.pages.moreService.supportList',compact('supports'));
    }

    public function tourSupportDelete($id){
        $supportDelete = TourSupport::find($id)->delete();

        return back();
    }

    public function tourSupportEdit($id){

        $supportEdit = TourSupport::find($id);
        return view('backend.pages.moreService.supportEdit',compact('supportEdit'));
    }

    public function tourSupportUpdate(Request $request,$id){



        $request->validate([

            "tittle"=>'required',
            "v_name"=>'required',
            "location_for"=>'required',
            "price"=>'required',

              ]);

        $supportUpdate = TourSupport::find($id);
        $imageName = null;
        if($request->hasFile('image')){

           $imageName = date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->storeAs('/uploads',$imageName);
        }


        $supportUpdate->Update([
            "tittle"=>$request->tittle,
            "v_name"=>$request->v_name,
            "description"=>$request->description,
            "price"=>$request->price,
            "location_for"=>$request->location_for,
            "status"=>$request->status,
            "image"=>$imageName,

        ]);
        Alert::success('Success','Updated');
        return back();
    }

    public function tourSupportView($id){

        $SupportView = TourSupport::find($id);
        return view('backend.pages.moreService.supportview',compact('SupportView'));
    }


}
