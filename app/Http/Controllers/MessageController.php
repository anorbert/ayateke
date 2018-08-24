<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\Requests;
use App\Anouncements;

class MessageController extends Controller
{
   public function chat(){
      $Messagectr=Messages::count();
      $mess=Messages::orderby('id','desc')->get();
        $messs=Messages::orderby('id','desc')->get();
        $link=Messages::paginate(1);
          $mctr=Messages::count();

    
        $req=Requests::count();
         $ann=Anouncements::where('type','=','users')->count();
         $notif=Anouncements::where('type','=','users')->get();

        return view('Admin.chat',compact('Messagectr','mess','messs','req','ann','notif','link'));
       }

       public function sendmessage(Request $data)
   {


           $this->validate($data,[
    'message'=>'required',
    'name'=>'required',
    'email'=>'required',
    'subject'=>'required',
    
    ]);


        $message = New Messages;
        $message ->name= $data->input('name');
        $message ->email= $data->input('email');
        $message ->subject= $data->input('subject');
    $message ->content = $data->input('message');
    $message ->Save();
    return back()->with('status','thank you for contacting us! we will be back to you soon!');
    
       }

       
}
