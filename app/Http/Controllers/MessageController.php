<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){

        $messages = Message::all();
        return view('frontend.message.index', compact('messages'));
    }

    public function view($id){
        $message = Message::findOrFail($id);
        return view('frontend.message.view', compact('message'));
    }
}
