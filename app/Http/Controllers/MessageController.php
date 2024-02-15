<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function viewMessage()
    {
        return view('message');
    }

    public function createMessage(Request $request)
    {
        $message = new Message;
        $message->message = $request->message;
        $message->save();
        return view('message', ['message', $message]);
    }
}
