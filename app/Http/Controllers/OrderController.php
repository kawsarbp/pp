<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /*payment cash on delivery*/
    public function payment(Request $request)
    {
        if ($request->payment == 'cashondelivery') {

            $carts = Cart::where('user_id', Auth::id())->get();
            foreach ($carts as $cart) {
                Order::create([
                    'user_id' => Auth::id(),
                    'product_id' => $cart->product_id,
                    'cart_id' => $cart->id,
                    'order_id' => date('dmyhis') . uniqid(),
                    'name' => $cart->name,
                    'email' => $cart->email,
                    'address' => $cart->address,
                    'phone' => $cart->phone,
                    'product_name' => $cart->product_name,
                    'product_price' => $cart->product_price,
                    'product_discount' => $cart->product_discount,
                    'product_qty' => $cart->product_qty,
                    'product_photo' => $cart->product_photo,
                    'payment_status' => 'Cash On Delivery',
                    'delivery_status' => 'Processing',
                ]);
                $product = Product::find($cart->product_id);
                $product->product_quantity = $product->product_quantity - $cart->product_qty;
                $product->save();
            }
            $ids = Cart::where('user_id', Auth::id())->pluck('id')->toArray();
            Cart::whereIn('id', $ids)->delete();
            return redirect()->route('user.paymentMethod')->with(['type' => 'success', 'message' => 'Thank you for your purchase!']);
            /*return view('frontend.ecom.cart.payment_method');*/
        } elseif ($request->payment == 'stripe') {
            return 'processing';
        }

    }
}
