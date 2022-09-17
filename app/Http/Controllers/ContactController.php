<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $req)
    {
        //validate form
        $data=[
            'name' => $req->name,
            'email' => $req->email,
            'message' =>$req->message
        ];
        Mail::to('info@lekslign.com')->send(new ContactMail($data));

        return redirect()->back()->with('message', 'Message Sent Successfully!');
    }
}
