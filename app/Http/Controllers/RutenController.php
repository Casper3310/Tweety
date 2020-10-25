<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutenController extends Controller
{
    public function home()
    {
        return view('ruten.index');
    }
}
