<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
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
            "role"=>"customer",

        ]);

        return to_route('landing.page');

    }

    public function loginForm(){
        return view('frontend.pages.login.login');
    }

    public function loginProcess(Request $request){

//dd($request->all());
    $credential = $request->only(['email','password']);

    if(Auth::attempt($credential))
    {
if(auth()->user()->role == 'admin' or 'customer'){
    if(auth()->user()->role == 'admin'){


        return redirect()->route('home');
    }else{
        return redirect()->route('landing.page');

    }
}
    }

}



public function logout(){
        Auth::logout();

        return redirect()->route('landing.page');

}

}
