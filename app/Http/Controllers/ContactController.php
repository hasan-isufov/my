<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
       // Form data validation
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'surname' => 'required|string|max:255',
        'message' => 'required|string',
        'email' => 'required|string|max:200'

    ]);

    // Mail sending
    Mail::to('hsnsvs.work@gmail.com')
        ->send(new ContactFormMail($validated));

    return back()->with('success', 'Your message has been sent successfully!');
    }
}

