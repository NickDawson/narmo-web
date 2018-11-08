<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    //
	  public function create()
    {
       return view('layouts.contacts');
    }

    public function store(Request $request)
    {
          //  dd($request->all());
          $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'

          ]);
          Mail::send('emails.contact-message', [
              'msg' => $request->message
          ], function ($mail) use($request) {
              $mail->from($request->email, $request->name);

              $mail->to('info@narmo.co.tz')->subject('Contact Message');
          });

          return redirect()->back()->with('flash_message', 'Thank you for your message.');
    }









}
