<?php

namespace App\Http\Controllers;

use App\Models\Boks;
use App\Models\Books;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $product = Product::find($id);
        return view('frontend.pages.bookForm',compact('product'));
    }

    public function bookingStore(Request $request){


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'from_date' => 'required|date|after_or_equal:'.today()->format('Y-m-d'),
            'to_date' => 'required|date|after:from_date',
            'road' => 'required',
            'city' => 'required',
            'location' => 'required',
            "hour" => 'required',
        ]);


        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }

        //dd($request->all());

            Boks::create([
            "user_id"=>$request->user_id,
            "name" =>$request->name,
            "phone" =>$request->phone,
            "from_date" =>$request->from_date,
            "to_date" =>$request->to_date,
            "road" =>$request->road,
            "city" =>$request->city,
            "location" =>$request->location,
            "status" =>'progress',
            "product_id"=>$request->product_id,
            "hour" =>$request->hour,
            "total"=>$request->total,


        ]);
        Alert::success('success','We will contact soon!');
        return redirect()->route('landing.page');

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Boks $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boks $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boks $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boks $books)
    {
        //
    }
}
