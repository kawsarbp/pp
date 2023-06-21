<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /*contact info store*/
    public function message(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        Message::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return redirect()->back()->with(['type' => 'success', 'message' => 'Thank you for your message']);
    }

    /*index message*/
    public function messageIndex()
    {
        $messages = Message::with('user')->orderBy('id','desc')->get();
        return view('backend.message.index',compact('messages'));
    }

}
