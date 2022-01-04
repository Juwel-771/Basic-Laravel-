<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    public function submit(Request $req){
        $this->validate($req, [
            'name'=>'required',
            'email'=>'required'
        ]);
        
        $message = new Message();
        $message->name = $req->input('name');
        $message->email = $req->input('email');
        $message->message = $req->input('textarea');

        $message->save();

        //Redirect

        return redirect('/home')->with('msg','Your Messages Posted To Admin');
    }

    public function getMessage(){
        $message = Message::all();

        return view('message',['msg'=>$message]);
    }


}
