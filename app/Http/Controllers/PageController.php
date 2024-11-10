<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;  // <-- Add this line to import the Mail facade

class PageController extends Controller
{
    public function home() { return view('pages.home'); }
    public function aboutUs() { return view('pages.about-us'); }
    public function services() { return view('pages.services'); }
    public function menu() { return view('pages.menu'); }
    public function gallery() { return view('pages.gallery'); }
    public function contactUs() { return view('pages.contact-us'); }

    public function sendMessage(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Collect the data
        $contactData = $request->only(['name', 'email', 'phone', 'message']);

        // Send the email
        Mail::to('harshinmansoor8982@gmail.com')->send(new ContactFormMail($contactData));

        // Redirect back with success message
        return back()->with('success', 'Your message has been successfully sent! We will get back to you soon.');
    }
}
