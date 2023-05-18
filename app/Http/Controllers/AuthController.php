<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registration(){
        return view('frontend.pages.login.registration');
    }

    public function registrationStore(Request $request){

        $request->validate([
            "name"=>'required',
            "phone"=>'required',
            "email"=>'required',
            "password"=>'required'
        ]);

        //dd($request->all());

        User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "address"=>$request->address,
            "password"=>bcrypt($request->password),

        ]);

        return back();

    }

    public function loginForm(){
        return view('frontend.pages.login.login');
    }

    public function loginProcess(Request $request){

//dd($request->all());
    $login = $request->except('_token');

    if(Auth::attempt($login))
    {
        return redirect()->back();
    }

    return redirect()->back();


}
// public function Logout_frontend(){
//         Auth::logout();

//         return redirect()->route('home');

// }


}
