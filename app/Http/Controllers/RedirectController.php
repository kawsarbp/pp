<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
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

            /*$users = User::where('role','0')->get();
            $totalOrders = Order::all();
            $compliteOrders = Order::where(['delivery_status'=>'delivered'])->get();

            $toalRevenue = 0;
            foreach ($totalOrders as $order)
            {
                $toalRevenue = $toalRevenue + $order->product_price;
            }*/


            return view('backend.dashboard'/*,compact('users','totalOrders','compliteOrders','toalRevenue')*/);
        } else {
            $id = Auth::id();
            $user = User::where('id',$id)->first();
            $cartValues = Cart::with('product')->where('user_id', Auth::id())->orderBy('id', 'desc')->get();
            /*wishlist data*/
            $wishlistValues = Wishlist::with('product', 'brand')->where('user_id', Auth::id())->orderBy('id', 'desc')->get();
            /*order data*/
//            $orders = Order::with('product')->where('user_id', Auth::id())->orderBy('id', 'desc')->get();
//            $totalOrders = Order::where(['user_id'=>Auth::id()])->get();
//            $compliteOrders = Order::where(['user_id'=>$id,'delivery_status'=>'delivered'])->get();
            /*get categories*/
            $categories = Category::with('subcategory')->where('status','active')->get();

            return view('frontend.ecom.user.dashboard',compact('user','cartValues','wishlistValues'/*,'orders','totalOrders','compliteOrders'*/,'categories'));
        }
    }
}
