<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;


class ContactController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        // $message = $request->input('message');
    
        $data = [
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ];
        
        Mail::send('contact-me', $data, function ($message) {
            $message->to('hamzatariqcs3@gmail.com')->subject('Contact Form Submission');
        });
        // Check for failures
        if (Mail::failures()) {
            // Handle failed email sending
            return response()->json(['message' => 'Failed to send email'], 500);
        } else {
            // Email sent successfully
            return response()->json(['message' => 'Email sent successfully'], 200);
        }
        
    
        // Redirect back or to a success page
    }
}
