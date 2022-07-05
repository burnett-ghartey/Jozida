<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Redirect;


class ContactMailController extends Controller
{
    public function contactSendMail(Request $request) {

        $contactName = $request->name;
        $contactEmail = $request->email;
        $contactMessage = $request->message;
        $contactSubject = $request->subject;
        $contactPhone = $request->phone;

        
        $data = array('name'=>$contactName, 'email'=>$contactEmail, 'msg'=>$contactMessage, 'subject'=>$contactSubject, 'phone'=>$contactPhone, 'subject'=>$contactSubject);
        Mail::send('emails.test', $data, function($message) use ($contactEmail, $contactName, $contactSubject){
            $message->from($contactEmail, $contactName)->to('00burnettghartey@gmail.com', 'Burnett')->subject($contactSubject);
        });
 
        Session::flash('message', 'Message Sent!');
        return Redirect::back();

}
}
