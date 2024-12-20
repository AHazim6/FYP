<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'name' => 'required|string',
            'message' => 'required|string',
            'subject' => 'required|array',
        ]);

        // Handle the data (e.g., save to the database or send an email)
        return back()->with('success', 'Thank you for contacting us!');
    }

}
