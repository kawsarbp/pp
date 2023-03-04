<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    public function redirect()
    {
        $role = Auth::user()->role;
        if ($role == '1') {
            return view('backend.dashboard');
        } else {
            return view('frontend.ecom.user.dashboard');
        }
    }
}
