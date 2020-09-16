<?php

namespace App\Http\Controllers;

use App\Tweety;


class TweetyController extends Controller
{
    public function index()
    {
        //$tweets= Tweety::latest()->get();
        return view('tweety.index',[
            'tweety' => auth()->user()->timeline()
        ]);
    }
    
    public function store()
    {
        $publish_text = request()->validate(['body' =>'required|max:255']);
        Tweety::create([
            'user_id'=> auth()->id(),
            'body' => $publish_text['body']
        ]);
        return redirect()->route('home');
    }

    
}
