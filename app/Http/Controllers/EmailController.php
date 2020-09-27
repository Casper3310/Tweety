<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use App\Mail\VerifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function show()
    {
        return view('test.email');
    }
    
    public function email_raw()
    {
        request()->validate(['email' => 'required|email']);
        
        Mail::raw("Email測試", function ($message) {
            $message->to(request('email'))
                    ->subject('你好');
        });
        return redirect(route('email'))
                ->with('message','Email寄出');
    }

    public function email_markdown()
    {
        request()->validate(['email' => 'required|email']);
        
        $token = 'sss';
        Mail::to(request('email'))
            ->send(new ContactMe($token));


        return redirect(route('email'))
                ->with('message','Email寄出');
    }
    
    public function email_VerifyMail()
    {
        request()->validate(['email' => 'required|email']);
        
        $token = rand(0,9999);
        Mail::to(request('email'))
            ->send(new VerifyMail($token));

        return redirect(route('email'))
                ->with('message','Email寄出');
    }

}
