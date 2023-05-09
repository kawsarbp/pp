<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    public function redirect()
    {
        $role = Auth::user()->role;
        if ($role == '1') {
            return view('backend.dashboard');
        } else {
            $id = Auth::id();
            $user = User::where('id',$id)->first();
            $cartValues = Cart::with('product')->where('user_id', Auth::id())->orderBy('id', 'desc')->get();
            /*wishlist data*/
            $wishlistValues = Wishlist::with('product', 'brand')->where('user_id', Auth::id())->orderBy('id', 'desc')->get();
            /*order data*/
            $orders = Order::with('product')->where('user_id', Auth::id())->orderBy('id', 'desc')->get();
            return view('frontend.ecom.user.dashboard',compact('user','cartValues','wishlistValues','orders'));
        }
    }
}
