<?php

namespace App\Http\Controllers;

use App\Tweety;
use Illuminate\Support\Facades\Auth;

class TweetyController extends Controller
{
    public function index()
    {
        //$tweets= Tweety::latest()->get();
        return view('tweety.index',[
            'tweety' => auth()->user()->timeline()
        ]);
    }
    
    public function Line_notify($text)
    {
        $headers = array(
            'Content-Type: multipart/form-data',
            'Authorization: Bearer GLqcOl4gym6gzV4WT5R4fGoY1w5YhpXqkoSUlquNt7m'
        );
        $message = array(
            /*訊息*/'message' => $text
        );
        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , "https://notify-api.line.me/api/notify");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
        $result = curl_exec($ch);
        curl_close($ch);
    }

    public function test()
    {
        $headers = array(
            'Content-Type: multipart/form-data',
            'Authorization: Bearer GLqcOl4gym6gzV4WT5R4fGoY1w5YhpXqkoSUlquNt7m'
        );
        $message = array(
            /*訊息*/'message' => 'Hello'
        );
        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , "https://notify-api.line.me/api/notify");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
        $result = curl_exec($ch);
        curl_close($ch);
    }

    public function store()
    {
        $publish_text = request()->validate(['body' =>'required|max:255']);
        Tweety::create([
            'user_id'=> auth()->id(),
            'body' => $publish_text['body']
        ]);
        $headers = array(
            'Content-Type: multipart/form-data',
            'Authorization: Bearer GLqcOl4gym6gzV4WT5R4fGoY1w5YhpXqkoSUlquNt7m'
        );
        $message = array(
            /*訊息*/'message' => $publish_text['body']
        );
        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL , "https://notify-api.line.me/api/notify");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
        $result = curl_exec($ch);
        curl_close($ch);
        return redirect()->route('home');
    }

}
