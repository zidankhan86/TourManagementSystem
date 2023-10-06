<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact(){
        return view('frontend.pages.contact');
}
public function contactStore(Request $request){

    $validator = Validator::make($request->all(), [
        "message"=>'required',
         "name"=>'required',
        "email"=>'required',
        "subject"=>'required',

    ]);

    if ($validator->fails()) {

        Alert::error('Error ', 'Something went wrong!');
        return back();
    } else {
        Alert::success('Success ', 'Thank you for contact us');
    }

   Contact::create([
    "message"=>$request->message,
    "name"=>$request->name,
    "email"=>$request->email,
    "subject"=>$request->subject,
   ]);
   Alert::success('Thank you for contact us');
   return back();
}

}
