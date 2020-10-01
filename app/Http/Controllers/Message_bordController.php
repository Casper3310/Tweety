<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Message_bordController extends Controller
{
    public function show()
    {
        
        $Allmessage = DB::select('select * from message_bord');
        
        return view('test.Message_bord',['Allmessage' => $Allmessage]);
    }

    public function store()
    {
        $message = request()->messagebord;
        $date = date("Y-m-d-H:i:s");
        DB::insert('insert into message_bord ( messagebord,created_at ) values (?, ?)', [$message, $date]);
        return back();
    }

    public function edit($id)
    {
        
        $message = DB::select('select * from message_bord where id = ?', [$id]);

        return view('test.Message_bord_edit',['message'=>$message]);
    }

    public function update()
    {
        $id = request()->id;
        $message = request()->messagebord;
        $date = date("Y-m-d-H:i:s");
        DB::update('update message_bord set messagebord = ?, updated_at = ? where id = ?', [$message,$date,$id]);
        return redirect( route('messagebord'));
    }

    public function delete()
    {
        $id = request()->id;
        
        DB::delete('delete from message_bord where id = ?', [$id]);
        return redirect( route('messagebord'));
    }
}
