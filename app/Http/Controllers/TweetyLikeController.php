<?php

namespace App\Http\Controllers;

use App\Tweety;
use Illuminate\Http\Request;

class TweetyLikeController extends Controller
{
    public function store(Tweety $tweety)
    {   
        $tweety->like(auth()->user());
        return back();
    }

    public function destory(Tweety $tweety)
    {
        $tweety->dislike(auth()->user());
        return back();
    }
}
