<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\SubOrder;
use App\Models\Transaction;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

use Session;
use Stripe;

class OrderController extends Controller
{
    /*payment cash on delivery*/
    public function payment(Request $request, $totalprice)
    {
        $totalprice = base64_decode($totalprice);
        if ($request->payment == 'cashondelivery') {

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
                'payment_status' => 'Cash On Delivery',
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
                    'order_id' => $order->order_id,
                    'product_id' => $cart->product_id,
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


        }elseif ($request->payment == 'myaccount'){

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

            if($total < Auth::user()->balance)
            {
                Order::create([
                    'user_id' => Auth::id(),
                    'order_id' => uniqid(),
                    'name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                    'address' => Auth::user()->address,
                    'phone' => Auth::user()->phone,
                    'total_price' => $total,
                    'shipping_charge' => '0',
                    'payment_status' => 'my acoount',
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
                        'order_id' => $order->order_id,
                        'product_id' => $cart->product_id,
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
                /*update user balance*/
                $user_balance =  User::where('id','=',Auth::id())->first();
                $user_balance->balance = $user_balance->balance - $total;
                $user_balance->save();
                return redirect()->route('user.paymentMethod')->with(['type' => 'success', 'message' => 'Thank you for your purchase!']);
            }else{
                return redirect()->back()->with(['type' => 'success', 'message' => 'insufficient balance!']);
            }

        } elseif ($request->payment == 'stripe') {
            return view('payment.stripe', compact('totalprice'));
        } elseif ($request->payment == 'paypal') {
            return view('payment.paypal', compact('totalprice'));
        }

    }

    /*stripe payment*/
    public function stripePost(Request $request, $totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([

            "amount" => $totalprice * 100,

            "currency" => "usd",

            "source" => $request->stripeToken,

            "description" => "Thanks for payment"

        ]);

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
            'payment_status' => 'Stripe payment',
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
                'order_id' => $order->order_id,
                'product_id' => $cart->product_id,
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

    }

    /*cancel order*/
    public function cancelOrder($id)
    {
        /*send mail*/
        $data = ['name' => auth()->user()->name, 'greeting' => 'Thank you for your order!', 'status' => 'Order Cancel',];
        $user['to'] = auth()->user()->email;
        Mail::send('mail/order-mail', $data, function ($message) use ($user) {
            $message->to($user['to']);
            $message->subject('Faz Group');
        });
        /*send mail*/
        $user_id = Auth::id();
        $order = Order::latest()->where(['user_id'=>$user_id,'order_id'=>$id])->first();

        $orders = SubOrder::where(['order_id' => $order->order_id])->get();

        foreach ($orders as $order) {
            $product = Product::find($order->product_id);
            $product->product_quantity = $product->product_quantity + $order->product_qty;
            $product->save();
        }

        $dltorder = Order::where('order_id', $id)->first();
        /*$dltorder->delete();*/
        if ($dltorder->payment_status == 'Cash On Delivery') {

            Transaction::create([
                'user_id' => $dltorder->user_id,
                'transaction_id' => uniqid(),
                'type' => 1,
                'gateway' => $dltorder->payment_status,
                'amount' => $dltorder->total_price,
                'description' => 'your order canceled',
                'status' => 'active',
                'operation' => null
            ]);
            $dltorder->delivery_status = 'cancel';
            $dltorder->save();

            $user = User::find($dltorder->user_id);
            $user->balance = $user->balance + $dltorder->total_price;
            $user->save();
        } else {
            $dltorder->delivery_status = 'cancel';
            $dltorder->save();
        }


        /*$ids = SubOrder::where(['order_id' => $id])->pluck('id')->toArray();
        SubOrder::whereIn('id', $ids)->delete();*/

        return redirect()->route('user.home')->with(['type' => 'success', 'message' => 'Your order canceled.']);
    }

    /*download invoice*/
    public function downloadInvoice($id)
    {
//        $ids = Order::where(['user_id' => $id, 'delivery_status' => 'processing'])->pluck('id')->toArray();
//        $orders = Order::find($ids);

        $order = Order::latest()->first();
        $orders = SubOrder::where('order_id', $order->order_id)->get();

        //return view('pdf.invoice',compact('orders'));
        $pdf = Pdf::loadView('pdf.invoice', compact('orders'));
        return $pdf->download('invoice.pdf');
    }

    /*order show in admin*/
    public function index()
    {
        $orders = Order::with('user')->orderByDesc('id')->get();
        return view('backend.order.index', compact('orders'));
    }

    /*order view*/
    public function view($id)
    {
        $subOrder = SubOrder::where('order_id', $id)->get();

        if ($subOrder)
            return view('backend.order.view', compact('subOrder'));
        else
            return redirect()->back();
    }

    /*payment status change*/
    public function paymentStatusChange($id)
    {
        /*send mail*/
        $data = ['name' => auth()->user()->name, 'greeting' => 'Thank you for your order!', 'status' => 'paid',];
        $user['to'] = auth()->user()->email;
        Mail::send('mail/order-mail', $data, function ($message) use ($user) {
            $message->to($user['to']);
            $message->subject('Faz Group');
        });
        /*send mail*/
        $order = Order::find($id);
        $order->payment_status = 'paid';
        $order->delivery_status = 'delivered';
        $order->save();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Your order delevered.']);
    }

    /*payment status change*/
    public function paymentStatusRechived($id)
    {
        /*send mail*/
        $data = ['name' => auth()->user()->name, 'greeting' => 'Thank you for your order!', 'status' => 'received',];
        $user['to'] = auth()->user()->email;
        Mail::send('mail/order-mail', $data, function ($message) use ($user) {
            $message->to($user['to']);
            $message->subject('Faz Group');
        });
        /*send mail*/
        $order = Order::find($id);
//        $order->payment_status = 'Cash On Delivery';
        $order->delivery_status = 'received';
        $order->save();
        return redirect()->back()->with(['type' => 'success', 'message' => 'order received.']);
    }

    /*order remove*/
    public function orderRemove($id)
    {
        /*send mail*/
        $data = ['name' => auth()->user()->name, 'greeting' => 'Thank you for your order!', 'status' => 'order calceled',];
        $user['to'] = auth()->user()->email;
        Mail::send('mail/order-mail', $data, function ($message) use ($user) {
            $message->to($user['to']);
            $message->subject('Faz Group');
        });
        /*send mail*/

        $order = Order::find($id);

        /*Transaction::create([
            'user_id' => $order->user_id,
            'transaction_id' => uniqid(),
            'type'=>1,
            'gateway'=>$order->payment_status,
            'amount'=>$order->total_price,
            'description'=>'your order canceled',
            'status'=>'active',
            'operation'=>null
        ]);*/

        $order->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Remove Success']);
    }

    /*Order cancel process*/
    public function paymentStatusCancel($id)
    {
        $data = ['name' => auth()->user()->name, 'greeting' => 'Thank you for your order!', 'status' => 'Order Cancel',];
        $user['to'] = auth()->user()->email;
        Mail::send('mail/order-mail', $data, function ($message) use ($user) {
            $message->to($user['to']);
            $message->subject('Faz Group');
        });
        /*send mail*/
        $order = Order::where('order_id',$id)->first();

        $orders = SubOrder::where(['order_id' => $id])->get();

        foreach ($orders as $odr) {
            $product = Product::find($odr->product_id);
            $product->product_quantity = $product->product_quantity + $odr->product_qty;
            $product->save();
        }


        if ($order->payment_status == 'Stripe payment'  OR $order->payment_status == 'paypal payment'  OR $order->payment_status == 'my acoount') {
            Transaction::create([
                'user_id' => $order->user_id,
                'transaction_id' => uniqid(),
                'type' => 1,
                'gateway' => $order->payment_status,
                'amount' => $order->total_price,
                'description' => 'your order canceled',
                'status' => 'active',
                'operation' => null
            ]);

            $order->delivery_status = 'cancel';
            $order->save();

            $user = User::find($order->user_id);
            $user->balance = $user->balance + $order->total_price;
            $user->save();

        } else {
            $order->delivery_status = 'cancel';
            $order->save();
        }

        return redirect()->back()->with(['type' => 'success', 'message' => 'order Cancel.']);
    }


}
