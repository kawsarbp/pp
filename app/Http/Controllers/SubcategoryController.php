<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /*subcategory view*/
    public function index()
    {
        $subcategories = subcategory::with('category')->orderBy('id','desc')->get();
        return view('backend.category.subcategories',compact('subcategories'));
    }
    /*subcategory create form*/
    public function subcategoryCreate()
    {
        $activeCat = Category::where('status','active')->get();
        return view('backend.category.subcategory-create',compact('activeCat'));
    }
    /*subcategory store*/
    public function subcategoryStore(Request $request)
    {
        $request->validate([
            'category_id'=>'required',
            'subcategory_name'=>'required|unique:subcategories|min:3'
        ]);
        subcategory::create([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => str_replace(' ','-',$request->subcategory_name),
            'status' => $request->status,
        ]);

        return redirect()->back()->with(['type'=>'success','message' => 'SubCategory Create Done.']);
    }


}
