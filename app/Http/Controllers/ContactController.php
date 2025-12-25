<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Show contact page
    public function show()
    {
        return view('users.contact');
    }

    // Handle form submission
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to('takyiphilipat@gmail.com')
            ->send(new ContactMessageMail($data));

        return back()->with('success', 'Message sent successfully!');
    }
}
