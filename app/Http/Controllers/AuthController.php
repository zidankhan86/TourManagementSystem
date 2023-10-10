<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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

        Alert::success('Success','Registration');
        return to_route('landing.page');

    }

    public function loginForm(){
        return view('frontend.pages.login.login');
    }

    public function loginProcess(Request $request){

        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        // Define custom error messages (optional)
        $customMessages = [
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Password is required.',
        ];

        // Validate the request data
        $request->validate($rules, $customMessages);
        // dd($request->all());
        $credential = $request->only(['email', 'password']);

        if (Auth::attempt($credential)) {
            if (auth()->user()->role == 'admin' or auth()->user()->role == 'customer') {
                if (auth()->user()->role == 'admin') {
                    Alert()->success('Success', 'Login');
                    return redirect()->route('home');
                } else {
                    return redirect()->route('landing.page');
                }
            }
        } else {
            Alert::error('Success','Registration');
            // Password does not match, display an error message
            return redirect()->route('login')->withErrors(['password' => 'Enter correct Password']);;
        }
    }




public function logout(){
        Auth::logout();

        Alert()->success('Success','Logout');

        return redirect()->route('landing.page');

}

}
