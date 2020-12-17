<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }

    public function store(Request $request){
        $request->validate(['email' => 'required|email']);
        Mail::to($request->email)->send(new ContactMe('shirts'));
        return redirect('/')
            ->with('message', 'Email Sent');
    }
}
