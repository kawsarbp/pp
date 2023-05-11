<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /*categories page*/
    public function index()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('backend.category.categories',compact('categories'));
    }

    /*category show*/
    public function categoryCreate()
    {
        return view('backend.category.category-create');
    }
    /*category store*/
    public function categoryStore(Request $request)
    {
        $request->validate([
            'category_name'=>'required|unique:categories|min:3',
        ]);
        /*$category = new Category;
        $category->category_name = $request->category_name;
        $category->category_slug = str_replace(' ', '-', $request->category_name);
        $category->category_icon = $request->category_icon;
        $category->status = $request->status;
        $category->save();*/
        Category::create([
            'category_name' => $request->category_name,
            'category_slug' => str_replace(' ','-',$request->category_name),
            'category_icon' => $request->category_icon,
            'status' => $request->status,
        ]);
        return redirect()->back()->with(['type'=>'success','message' => 'Category Create Done.']);
    }
    /*category delete*/
    public function categoryDestroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with(['type'=>'success','message' => 'Category Delete Success.']);
    }
    /*category edit*/
    public function categoryEdit($id)
    {

        $category = Category::find($id);
        if(!$category)
            return redirect()->back();
        else
        return view('backend.category.edit-category',compact('category'));
    }

    public function categoryUpdate(Request $request,$id)
    {
        $request->validate([
            'category_name'=>'required|string|min:3|max:30|unique:categories,id,'.$id,
        ]);
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->category_slug = str_replace(' ','-',$request->category_name);
        $category->category_icon = $request->category_icon;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('category.index')->with(['type'=>'success','message' => 'Category Update Done.']);
    }
    /*status change*/
    public function categoryStatus($id)
    {
        $status = Category::findOrFail($id);
        if ($status->status == 'active')
        {
            $status->status = 'inactive';
            $status->save();
        }else{

            $status->status = 'active';
            $status->save();
        }
        return redirect()->back()->with(['type'=>'success','message' => 'Category Status Updated.']);
    }

}
