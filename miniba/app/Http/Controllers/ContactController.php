<?php

namespace App\Http\Controllers;

use App\Mail\SendContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Models\User;


class ContactController extends Controller
{
    //
    public function input()
    {
        return view('contact.input');
    }

    public function confirm(Request $request)
    {
        $inputs = $request->all();

        return view('contact.confirm',compact('inputs'));
    }

    public function send(Request $request)
    {

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();


        $to = 'onoyama_e_rikuo@matondo.net';
        $name = $contact->name;
        $email = $contact->email;
        $message = $contact->message;

        Mail::to($to)->send(new SendContactMail($name, $email,$message));

        return redirect('/');
    }
}
