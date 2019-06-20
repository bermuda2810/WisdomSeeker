<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Symfony\Component\Debug\Debug;

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
        $input = $request->all();
        $output = $this->requestTranslate($input);
        $value = isset($output) ? $output['output'] : 'Unknown';
        return ['message' => $value, 'user' => 'bot', 'is_me' => false];
    }

    private function requestTranslate($input)
    {
        $url = config('app.translator_api');
        $params = [
            "input"=> $input,
        ];
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        $output = json_decode(curl_exec($curl), true);
        curl_close($curl);
        return isset($output) ? $output : null;
    }
}
