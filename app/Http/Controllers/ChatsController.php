<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ChatsController extends Controller
{
    /**
     * Show chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chat');
    }

    public function sendMessage(Request $request) {
        return ['message' => 'Chao buoi sang', 'user' => 'Bot'];
    }
}
