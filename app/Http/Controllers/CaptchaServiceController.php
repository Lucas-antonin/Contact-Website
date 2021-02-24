<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReCaptchaTestFormRequest;
use App\Mail\contacts;
use App\Models\Contact;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;




class CaptchaServiceController extends Controller
{


    public function captchaFormValidate(ReCaptchaTestFormRequest $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);


        Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        $email = $request->email;
        Mail::to($email)->send(new contacts());

       return redirect()->route('home');
    }

}
