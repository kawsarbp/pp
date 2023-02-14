<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /*view index page*/
    public function index()
    {
        return view('frontend.home-page');
    }
    /*view contact page*/
    public function contact()
    {
        return view('frontend.contact-page');
    }
    /*view user home page*/
    public function home()
    {
        return view('frontend.ecom.home');
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
    public function blog()
    {
        return view('frontend.ecom.blog');
    }
    /*view addToCart page*/
    public function addToCart()
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
        return view('frontend.ecom.cart.checkout');
    }
    /*view shippingMethod  page*/
    public function shippingMethod()
    {
        return view('frontend.ecom.cart.shipping');
    }

}
