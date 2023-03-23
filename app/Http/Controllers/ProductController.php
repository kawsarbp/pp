<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('backend.product.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::where('status', 'active')->get();
        $subcategories = Subcategory::with('category')->where('status', 'active')->get();
//        return $subcategories;
        return view('backend.product.create-product', compact('subcategories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'subcategory_id' => 'required',
            'brand_id' => 'required',
            'product_name' => 'required',
            'product_title' => 'required',
            'product_price' => 'required',
//            'product_discount'=>'required',
            'product_quantity' => 'required',
            'product_photo' => 'required|image',
            'description' => 'required',
            'status' => 'required',
        ]);

        $user_id = Auth::id();
        $file = $request->file('product_photo');
        $file_name = uniqid() . date('dmyhis.') . $file->getClientOriginalExtension();
        $product = Product::create([
            'user_id' => $user_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product_name,
            'product_title' => $request->product_title,
            'product_price' => $request->product_price,
            'product_discount' => $request->product_discount,
            'product_quantity' => $request->product_quantity,
            'product_photo' => $file_name,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        if ($product) {
            $file->move('uploads/product', $file_name);
        }
        return redirect()->back()->with(['type' => 'success', 'message' => 'Product Add Success.']);

    }

    /*productStatus*/
    public function productStatus($id)
    {
        $status = Product::findOrFail($id);

        if ($status->status == 'active') {
            $status->status = 'inactive';
            $status->save();
        } else {

            $status->status = 'active';
            $status->save();
        }
        return redirect()->back()->with(['type' => 'success', 'message' => 'Product Status Update Done.']);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('subcategory','brand','user')->findOrFail($id);
//        return $product;
        if($product)
        return view('backend.product.show',compact('product'));
        else
            return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::where('status', 'active')->get();
        $subcategories = Subcategory::with('category')->where('status', 'active')->get();
        $product = Product::find($id);
        return view('backend.product.edit-product', compact('brands', 'subcategories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'subcategory_id' => 'required',
            'brand_id' => 'required',
            'product_name' => 'required',
            'product_title' => 'required',
            'product_price' => 'required',
//            'product_discount'=>'required',
            'product_quantity' => 'required',
            'product_photo' => 'image',
            'description' => 'required',
            'status' => 'required',
        ]);
        $user_id = Auth::id();
        $product = Product::find($id);
        $product->user_id = $user_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_title = $request->product_title;
        $product->product_price = $request->product_price;
        $product->product_discount = $request->product_discount;
        $product->product_quantity = $request->product_quantity;

        $old_photo = $product->product_photo;
        $file = $request->file('product_photo');
        if ($file == null) {
            $product->product_photo = $old_photo;
        }else{
            if($file){
                $file_name = uniqid().date('dmyhis.').$file->getClientOriginalExtension();
                $product->product_photo = $file_name;
                $file->move('uploads/product',$file_name);
                File::delete(public_path('/uploads/product/'.$old_photo));
            }
        }
        $product->description = $request->description;
        $product->status = $request->status;
        $product->save();
        return redirect()->route('product.index')->with(['type' => 'success', 'message' => 'Product Update Success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $originalPath = getcwd() . "/uploads/product/{$product->product_photo}";
        if (File::exists($originalPath)) {
            File::delete($originalPath);
        }
        $product->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Product Delete Success']);
    }
}
