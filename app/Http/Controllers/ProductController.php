<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.product.products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::where('status','active')->get();
        $subcategories = Subcategory::with('category')->where('status','active')->get();
//        return $subcategories;
        return view('backend.product.create-product',compact('subcategories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'subcategory_id'=>'required',
            'brand_id'=>'required',
            'product_name'=>'required',
            'product_title'=>'required',
            'product_price'=>'required',
            'product_discount'=>'required',
            'product_quantity'=>'required',
            'product_photo'=>'required|image',
            'description'=>'required',
            'status'=>'required',
        ]);

        $user_id = Auth::id();
        $file = $request->file('product_photo');
        $file_name = uniqid() . date('dmyhis.') . $file->getClientOriginalExtension();
        $product = Product::create([
            'user_id'=> $user_id,
            'subcategory_id'=> $request->subcategory_id,
            'brand_id'=> $request->brand_id,
            'product_name'=> $request->product_name,
            'product_title'=> $request->product_title,
            'product_price'=> $request->product_price,
            'product_discount'=> $request->product_discount,
            'product_quantity'=> $request->product_quantity,
            'product_photo'=> $file_name,
            'description'=> $request->description,
            'status'=> $request->status,
        ]);
        if($product){
            $file->move('uploads/product', $file_name);
        }
        return redirect()->back()->with(['type'=>'success','message' => 'Product Add Success.']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
