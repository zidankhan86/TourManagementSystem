<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function productDetails($id)
    {
        $details = Product::find($id);
        $categories = Category::all();
        return view('frontend.pages.details',compact('details','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $packageName = Category::all();
       return view('backend.pages.productForm',compact('packageName'));
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required',
            'category_id'=>'required'
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $imageName, 'public');
        }


        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->image = $imageName;
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');

        $product->save();
        Alert::success('success', 'Car created successfully');
        return redirect()->route('products.index');

    }

    public function product()
    {

        $products = Category::all();

        return view('frontend.pages.package',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
