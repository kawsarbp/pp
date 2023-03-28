<?php

namespace App\Http\Livewire;

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
        if ($shoppingCart->product_qty <= 1) {
            $shoppingCart->product_qty = 1;
            if ($shoppingCart->product_qty == 1){
                session()->flash('message','min done');
            }
        } else {
            $shoppingCart->product_qty -= 1;
        }

        $shoppingCart->save();
    }

    public function incQty($id)
    {
        $shoppingCart = ShoppingCart::with('product')->find($id);
        if ($shoppingCart->product->product_quantity > $shoppingCart->product_qty) {
            $shoppingCart->product_qty += 1;
            if ($shoppingCart->product_qty == $shoppingCart->product->product_quantity){
                session()->flash('message','mix done');
            }
        } else {
            $shoppingCart->product_qty = $shoppingCart->product->product_quantity;
        }
        $shoppingCart->save();
    }
}
