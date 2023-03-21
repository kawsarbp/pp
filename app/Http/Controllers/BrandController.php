<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id','desc')->get();
        return view('backend.brand.brands',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create-brand');
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
            'brand_name' => 'required|unique:brands|min:3',
            'brand_photo' => 'required|image',
            'status' => 'required',
        ]);
        $file = $request->file('brand_photo');
        $file_name = uniqid() . date('dmyhis.') . $file->getClientOriginalExtension();
        $brand = Brand::create([
            'brand_name' => $request->brand_name,
            'brand_photo' => $file_name,
            'status' => $request->status,
        ]);
        if ($brand) {
            $file->move('uploads/brand', $file_name);
        }
        return redirect()->back()->with(['type' => 'success', 'message' => 'Brand Create Successfully.']);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function brandStatus($id)
    {
        $status = Brand::findOrFail($id);
        if ($status->status == 'active')
        {
            $status->status = 'inactive';
            $status->save();
        }else{
            $status->status = 'active';
            $status->save();
        }
        return redirect()->back()->with(['type'=>'success','message' => 'Brand Status Update Success.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand  = Brand::find($id);
        if($brand)
        return view('backend.brand.edit-brand',compact('brand'));
        else
            return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'brand_name' => 'required|min:3|unique:brands,id,'.$id,
            'status' => 'required',
        ]);

        $brand = Brand::find($id);
        $brand->brand_name = $request->brand_name;
        $old_photo = $brand->brand_photo;
        $file = $request->file('brand_photo');
        if ($file == null) {
            $brand->brand_photo = $old_photo;
        }else{
            if($file){
                $file_name = uniqid().date('dmyhis.').$file->getClientOriginalExtension();
                $brand->brand_photo = $file_name;
                $file->move('uploads/brand',$file_name);
                File::delete(public_path('/uploads/brand/'.$old_photo));
            }
        }
        $brand->status = $request->status;
        $brand->save();
        return redirect()->route('brand.index')->with(['type'=>'success','message' => 'Brand Update Success.']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Brand $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Brand::find($id);
        $originalPath = getcwd() . "/uploads/brand/{$blog->brand_photo}";
        if (File::exists($originalPath)) {
            File::delete($originalPath);
        }
        $blog->delete();
        return redirect()->back()->with(['type'=>'success','message' => 'Brand Delete Success']);
    }
}
