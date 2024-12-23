<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'nullable|string|max:15',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // Save contact form data in the database
        Contact::create($request->only(['name', 'email', 'mobile', 'service', 'message']));

        // Send a notification email
        Mail::to(config('seo.company.contact.email'))->send(new ContactSubmitted($request->all()));

        // Redirect with a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }

}
