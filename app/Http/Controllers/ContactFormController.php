<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

    public function contact()
    {
        return view('contact');
    }

    public function storeContactForm(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'recaptcha'
        ]);
        Contact::create($validate);
        Mail::to(env('MAIL_USERNAME'),env('MAIL_CC'))->send(new ContactFormMail($validate['name'], $validate['email'], $validate['phone'], "Contact From IVT Website" , $validate['subject'].'<br/>'.$validate['message']));
        return redirect()->back()->with('status', 'Contact us form submitted successfully!');
    }
}
