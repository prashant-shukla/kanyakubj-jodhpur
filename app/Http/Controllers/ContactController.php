<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validate the form inputs
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save data to contact_us table
        $contact = ContactUs::create($validated);

        // Prepare email data
        $emailData = [
            'fullname' => $contact->fullname,
            'email' => $contact->email,
            'phone_number' => $contact->phone,
            'subject' => $contact->subject,
            'message' => $contact->message,
        ];

        // Send email directly
        Mail::send([], [], function ($message) use ($emailData) {
            $message->to(setting("contact.email"))
                ->subject($emailData['subject'])
                ->html("
                        <h1>New Contact Us Message</h1>
                        <p><strong>Full Name:</strong> {$emailData['fullname']}</p>
                        <p><strong>Email:</strong> {$emailData['email']}</p>
                        <p><strong>Phone:</strong> {$emailData['phone_number']}</p>
                        <p><strong>Message:</strong> {$emailData['message']}</p>
                    ");
        });


        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
