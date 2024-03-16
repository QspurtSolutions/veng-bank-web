<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contact;
use App\Rules\ReCaptcha;
use Mail;






class ContactController extends Controller
{
    public function contact(){
        return view('contact');

    }
    
    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        

        $input = $request->all();

        Contact::create($input);

        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message' => $input['message'],
           
        ), function($message) use ($request){
            $message->from(env('MAIL_FROM_ADDRESS'));
            $message->to(env('MAIL_USERNAME'))->subject($request->get('subject'));
        });
        return redirect('index')->with(['success' => 'Contact Form Submit Successfully']);
    }
}