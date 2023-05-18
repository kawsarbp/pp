<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

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
                    'delivery_status' => 'processing',
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
        } elseif ($request->payment == 'stripe') {
            return 'processing';
        }

    }


    /*cancel order*/
    public function cancelOrder($id)
    {
        $ids = Order::where(['user_id' => $id, 'delivery_status' => 'processing'])->pluck('id')->toArray();
        Order::whereIn('id', $ids)->delete();
        return redirect()->route('user.home')->with(['type' => 'success', 'message' => 'Your order canceled.']);
    }

    /*download invoice*/
    public function downloadInvoice($id)
    {
        $ids = Order::where(['user_id' => $id, 'delivery_status' => 'processing'])->pluck('id')->toArray();
        $orders = Order::find($ids);

        //return view('pdf.invoice',compact('orders'));
        $pdf = Pdf::loadView('pdf.invoice',compact('orders'));
        return $pdf->download('invoice.pdf');
    }

    /*order show in admin*/
    public function index()
    {
        $orders = Order::with('product','user')->orderByDesc('id')->get();
        return view('backend.order.index',compact('orders'));
    }
    /*order view*/
    public function view($id)
    {
        $order =  Order::find($id);
        if ($order)
        return view('backend.order.view',compact('order'));
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
        $order->payment_status = 'Cash On Delivery';
        $order->delivery_status = 'received';
        $order->save();
        return redirect()->back()->with(['type' => 'success', 'message' => 'order received.']);
    }
    /*order remove*/
    public function orderRemove($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Remove Success']);
    }


}
