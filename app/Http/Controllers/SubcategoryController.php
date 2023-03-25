<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /*subcategory view*/
    public function index()
    {
        $subcategories = Subcategory::with('category')->orderBy('id','desc')->get();
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
        Subcategory::create([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => str_replace(' ','-',$request->subcategory_name),
            'status' => $request->status,
        ]);
        return redirect()->back()->with(['type'=>'success','message' => 'Create Done.']);
    }
    /*subcategory delete*/
    public function subcategoryDestroy($id)
    {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();
        return redirect()->back()->with(['type'=>'success','message' => 'Delete Success']);
    }
    /*edit subcategory*/
    public function subcategoryEdit($id)
    {
        $activeCat = Category::where('status','active')->get();
        $subcategory = Subcategory::find($id);
        return view('backend.category.edit-subcategory',compact('activeCat','subcategory'));
    }

    public function subcategoryUpdate(Request $request,$id)
    {
        $request->validate([
            'category_id'=>'required',
            'subcategory_name'=>'required|string|min:3|max:30|unique:subcategories,id,'.$id,
        ]);
        $subcategory = Subcategory::find($id);
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_name = $request->subcategory_name;
        $subcategory->subcategory_slug = str_replace(' ','-',$request->subcategory_name);
        $subcategory->status = $request->status;
        $subcategory->save();
        return redirect()->route('subcategory.index')->with(['type'=>'success','message' => 'Update Success']);
    }
    /*status change*/
    public function subcategoryStatus($id)
    {
        $status = Subcategory::findOrFail($id);
        if ($status->status == 'active')
        {
            $status->status = 'inactive';
            $status->save();
        }else{

            $status->status = 'active';
            $status->save();
        }
        return redirect()->back()->with(['type'=>'success','message' => 'Status Updated.']);
    }



}
