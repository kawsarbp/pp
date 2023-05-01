<?php
namespace App\Http\Controllers;

use App\Models\User;
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
            $id = Auth::id();
            $user = User::where('id',$id)->first();
            return view('frontend.ecom.user.dashboard',compact('user'));
        }
    }
}
