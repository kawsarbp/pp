<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Cart as ShoppingCart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\CreatesUserProviders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    /*view index page*/
    public function index()
    {

        return view('frontend.home-page');
        /*frontend.home-page*/
    }

    /*view contact page*/
    public function contact()
    {
        return view('frontend.contact-page');
    }

    /*view user home page*/
    public function home()
    {
        $brands = Brand::where('status', 'active')->orderBy('id', 'desc')->limit(12)->get();
        $products = Product::with('brand', 'subcategory', 'user')->where('status', 'active')->orderBy('id', 'desc')->get();
        $productslimit = Product::with('brand', 'subcategory', 'user')->where('status', 'active')->orderBy('id', 'desc')->limit(6)->get();

        if (Auth::id()) {
            $admin = Auth::user()->role == 1;
            if ($admin) {
                return redirect()->route('dashboard');
            } else {
                return view('frontend.ecom.home', compact('products', 'productslimit', 'brands'));
            }
        }
        return view('frontend.ecom.home', compact('products', 'productslimit', 'brands'));
    }

    /*view contact us page*/
    public function contactUs()
    {
        return view('frontend.ecom.contact-us');
    }

    /*view about us page*/
    public function aboutUs()
    {
        return view('frontend.ecom.about-us');
    }

    /*view blog page*/
    public function blog(Request $request)
    {
        $value = $request->search;
        $search = Blog::where('title', 'LIKE', '%' . $value . '%')->get();
        $blogs = Blog::where('status', 'active')->get();
        return view('frontend.ecom.blog', compact('blogs', 'search'));
    }

    /*view addToCart page*/
    public function addToCart(Request $request, $id)
    {
        if (Auth::id()) {
            $product = Product::find($id);
            $aleryAdded = Cart::where(['product_id' => $product->id, 'user_id' => Auth::id()])->first();

            if ($aleryAdded == null) {
                $data = [
                    'user_id' => Auth::id(),
                    'product_id' => $product->id,
                    'name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                    'phone' => Auth::user()->phone,
                    'address' => Auth::user()->address,
                    'product_name' => $product->product_name,
                    'product_price' => $product->product_price,
                    'product_discount' => $product->product_discount,
                    'product_qty' => 1,
                    'product_photo' => $product->product_photo,
                ];
                Cart::updateOrcreate($data);

                /*$product->product_quantity = $product->product_quantity - 1;
                $product->save();*/

            } else {

                return redirect()->route('user.Cart')->with(['type' => 'success', 'message' => 'Product Already Added in cart.']);
            }


            return redirect()->route('user.Cart')->with(['type' => 'success', 'message' => 'Product Added cart.']);

        } else {
            return redirect()->route('login');
        }
    }

    public function cart()
    {
        return view('frontend.ecom.cart.cart');
    }

    /*view addToCart page*/
    public function myWishlist()
    {
        return view('frontend.ecom.wishlist.wishlist');
    }

    /*view userDashboard  page*/
    public function userDashboard()
    {
        return view('frontend.ecom.user.dashboard');
    }

    /*view userDashboard  page*/
    public function myHistories()
    {
        return view('frontend.ecom.user.histories');
    }

    /*view checkout  page*/
    public function checkout()
    {
        $cartValues = Cart::with('product')->where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        $cart = Cart::where('user_id', Auth::id())->get();
        if (Auth::id()) {
            if (count($cart) > 0) {
                $user = User::find(Auth::id());
                return view('frontend.ecom.cart.checkout', compact('user','cartValues'));
            } else {
                return redirect()->back()->with(['type' => 'success', 'message' => 'Please added product in Cart']);
            }
        }
    }

    /*user update*/
    public function userUpdate(Request $request, $id)
    {

//        return $request->all();
        $request->validate([
            'condition' => 'required'
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->postcode = $request->postcode;
        $user->note = $request->note;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        if ($request->condition == true) {
            $user->condition = true;
        } else {
            $user->condition = false;
        }

        $user->save();
        return redirect()->route('user.shippingMethod')->with(['type' => 'success', 'message' => 'information Updated']);

    }

    /*view shippingMethod  page*/
    public function shippingMethod()
    {
        $cartValues = Cart::with('product')->where('user_id', Auth::id())->orderBy('id', 'desc')->get();

        $cart = Cart::where('user_id', Auth::id())->get();
        if (Auth::id()) {
            $user = User::find(Auth::id());
            return view('frontend.ecom.cart.shipping', compact('user','cartValues'));
        }
    }

    public function paymentOption()
    {

        $cartValues = Cart::with('product')->where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        $cart = Cart::where('user_id', Auth::id())->get();
        if (Auth::id()) {
            $user = User::find(Auth::id());
            return view('frontend.ecom.payment.payment-option',compact('user','cartValues'));
        }
    }

    /*view shippingMethod  page*/
    public function paymentMethod()
    {
        return view('frontend.ecom.cart.payment_method');
    }

    /*view shippingMethod  page*/
    public function orderDetails()
    {
        return view('frontend.ecom.cart.order_details');
    }

    /*view shippingMethod  page*/
    public function productDetails($id)
    {
        $products = Product::with('brand', 'subcategory', 'user')->where('status', 'active')->orderBy('id', 'desc')->get();
        $product = Product::with('brand', 'subcategory', 'user')->find($id);
        return view('frontend.ecom.product.product-details', compact('product', 'products'));
    }

    /*single blog post*/
    public function blogPost($id)
    {
        $blog = Blog::findOrfail($id);
        if ($blog)
            return view('frontend.ecom.single-blog', compact('blog'));
        else
            return redirect()->back();
    }

    /*blog post search*/
    public static function blogSearch(Request $request)
    {
        $value = $request->search;
        $search = Blog::where('title', 'LIKE', '%' . $value . '%')->get();
        $blogs = Blog::where('status', 'active')->get();
        return view('frontend.ecom.blog', compact('blogs', 'search'));
    }

}
