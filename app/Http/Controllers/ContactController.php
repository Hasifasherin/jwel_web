<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate Form Data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Store Form Data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        // SAVE DATA TO DATABASE
        Contact::create($data);

        // Send Email Using SMTP
        Mail::to('abiminju310@gmail.com')
            ->send(new ContactMessageMail($data));

        return back()->with('success', 'Message sent successfully!');
    }
}