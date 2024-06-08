<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'messageText' => $request->input('message'),
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('kamil.abbaszade@gmail.com')
                ->subject('Contact Form Message');
        });

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
