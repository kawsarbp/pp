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
}
