<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact-us');
    }

    public function sendEmail(Request $request){
        $details = [
            'name' =>    $request -> name,
            'surname' => $request -> surname,
            'email' =>   $request -> email,
            'msg' =>     $request -> msg
        ];

        Mail::to('190103199@stu.sdu.edu.kz')->send(new ContactMail($details));
        return back()->with('message_sent','Your message has been sent successfully');
    }

}
