<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Cart as ShoppingCart;

class Cart extends Component
{
    public function render()
    {
        $cartValues = ShoppingCart::with('product')->where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        return view('livewire.cart', compact('cartValues'));
    }

    public function decQty($id)
    {
        $shoppingCart = ShoppingCart::whereId($id)->first();
        $product_id = $shoppingCart->product_id;
        $product = Product::find($product_id);

        if ($shoppingCart->product_qty <= 1) {
            $shoppingCart->product_qty = 1;
            if ($shoppingCart->product_qty == 1){
                session()->flash('cartmsg','Not less than that');
                session()->flash('type','warning');
            }
        } else {
            $shoppingCart->product_qty -= 1;
        }

        $shoppingCart->save();
        $product->product_quantity = $product->product_quantity += 1;
        $product->save();

    }

    public function incQty($id)
    {
        $shoppingCart = ShoppingCart::with('product')->find($id);
        $product_id = $shoppingCart->product_id;
        $product = Product::find($product_id);


        if ($shoppingCart->product->product_quantity > $shoppingCart->product_qty) {
            $shoppingCart->product_qty += 1;

            if ($shoppingCart->product_qty == $shoppingCart->product->product_quantity){
                session()->flash('cartmsg','not more than that');
                session()->flash('type','warning');
            }
        } else {
            $shoppingCart->product_qty = $shoppingCart->product->product_quantity;
        }
        $shoppingCart->save();
        $product->product_quantity = $product->product_quantity -= 1;
        $product->save();


    }
    /*delete data form cart*/
    public function removeformCart($id)
    {
        $cart = ShoppingCart::find($id);
        $product_id = $cart->product_id;
        $product = Product::find($product_id);
        if ($cart)
        {
            $cart->delete();
        }
        $product->product_quantity = $product->product_quantity + $cart->product_qty;
        $product->save();
        session()->flash('cartmsg','Cart product remove successfully.');
        session()->flash('type','success');

    }

}
