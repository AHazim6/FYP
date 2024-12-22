<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PostMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('contact-us');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        Mail::to('youremail@gmail.com')->send(new PostMail());

        return back()->with('success', 'Your message has been sent successfully!');
    }

}
