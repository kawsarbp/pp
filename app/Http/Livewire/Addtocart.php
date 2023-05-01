<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Addtocart extends Component
{
    public function render()
    {
//        $wishlist = Wishlist::with('product')->where('user_id',Auth::id())->get();

        $brands = Brand::where('status', 'active')->orderBy('id', 'desc')->limit(12)->get();
        $products = Product::with('brand', 'subcategory', 'user')->where('status', 'active')->orderBy('id', 'desc')->get();
        $productslimit = Product::with('brand', 'subcategory', 'user')->where('status', 'active')->orderBy('id', 'desc')->limit(6)->get();
        return view('livewire.addtocart',compact('brands','products','productslimit'));
    }

//    public function addtocart($id)
//    {
//
//    }

}
