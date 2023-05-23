<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class PaypalController extends Controller
{
//    public function createpaypal()
//    {
//        return view('payment.paypal');
//    }

    /*processPaypal*/
    public function processPaypal(Request $request,$totalprice)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('processSuccess'),
                "cancel_url" => route('processCancel'),
            ],

            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => "$totalprice"
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            return redirect()
                ->route('user.home')
                ->with(['type' => 'error', 'message' => 'something wrong!']);

        } else {
            return redirect()
                ->route('user.home')
                ->with(['type' => 'error', 'message' => 'something wrong!']);

        }
    }

    public function processSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {


            /*==========================================================================*/


            $carts = Cart::with('product')->where('user_id', Auth::id())->get();

            $total = 0;
            foreach ($carts as $cart) {

                $discount = $cart->product_price * ($cart->product_discount / 100);
                $discountedPrice = $cart->product_price - $discount * $cart->product_qty;

                if ($cart->product_discount > 0) {
                    $price = $discountedPrice;
                } else {
                    $price = $cart->product_price;
                }
                $total += $price * $cart->product_qty;

            }

            Order::create([
                'user_id' => Auth::id(),
                'order_id' => uniqid(),
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'address' => Auth::user()->address,
                'phone' => Auth::user()->phone,
                'total_price' => $total,
                'shipping_charge' => '0',
                'payment_status' => 'paypal payment',
                'delivery_status' => 'processing',
            ]);

            $order = Order::latest()->first();


            foreach ($carts as $cart) {

                $discount = $cart->product_price * ($cart->product_discount / 100);
                $discountedPrice = $cart->product_price - $discount * $cart->product_qty;

                if ($cart->product_discount > 0) {
                    $price = $discountedPrice;
                } else {
                    $price = $cart->product_price;
                }
                $productTotal = $price * $cart->product_qty;

                SubOrder::create([
                    'order_number' => $order->id,
                    'product_id' => $cart->product_id,
                    'order_id' => $order->order_id,
                    'name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                    'address' => Auth::user()->address,
                    'phone' => Auth::user()->phone,
                    'product_name' => $cart->product_name,
                    'product_price' => $cart->product_price,
                    'product_discount' => $cart->product_discount,
                    'product_total_price' => $productTotal,
                    'product_qty' => $cart->product_qty,
                    'product_photo' => $cart->product_photo

                ]);


                /*send mail*/
                $data = ['name' => auth()->user()->name, 'greeting' => 'Thank you for your order!', 'status' => 'processing',];
                $user['to'] = auth()->user()->email;
                Mail::send('mail/order-mail', $data, function ($message) use ($user) {
                    $message->to($user['to']);
                    $message->subject('Faz Group');
                });
                /*send mail*/
                /*update product qty*/
                $product = Product::find($cart->product_id);
                $product->product_quantity = $product->product_quantity - $cart->product_qty;
                $product->save();
                /*update product qty*/
            }
            /*delete product*/
            $ids = Cart::where('user_id', Auth::id())->pluck('id')->toArray();
            Cart::whereIn('id', $ids)->delete();
            return redirect()->route('user.paymentMethod')->with(['type' => 'success', 'message' => 'Thank you for your purchase!']);
            /*delete product*/
            /*return view('frontend.ecom.cart.payment_method');*/


            /*==========================================================================*/

            /*return redirect()
                ->route('user.home')
                ->with('success', 'Transaction complete.');*/
        } else {
            return redirect()
                ->route('user.home')
                ->with(['type' => 'error', 'message' => 'something wrong!']);
        }
    }


    public function processCancel(Request $request)
    {
        return redirect()
            ->route('user.home')
            ->with(['type' => 'error', 'message' => 'something wrong!']);
    }


}
