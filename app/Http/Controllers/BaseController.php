<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class BaseController extends Controller
{
    public function home()
    {
        return view('web.home-page');
    }

    public function about()
    {
        return view('web.about');
    }

    public function services()
    {
        return view('web.services');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function saveMessage(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'min:3'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'string', 'min:11'],
            'reason_for_contact' => ['required'],
            'message' => ['required'],
            'g-recaptcha-response' => ['required', 'captcha']
        ], [
            'reason_for_contact.required' => 'A checkbox must be filled to proceed'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'from' => $request->email,
            'phone_number' => $request->phone_number,
            'reason_for_contact' => $request->reason_for_contact,
            'message' => $request->message,
        ];

        Mail::to('thepottvmedia@gmail.com')->send(new ContactUsMail($data));

        session()->flash('success', 'Message sent successfully');
        return redirect()->back();
    }
}
