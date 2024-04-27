<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;
use App\Mail\ContactMeForGuest;
use Illuminate\Support\Facades\DB;

use App\Models\ContactMeModel;

class ContactController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $details=[
            'email'=>$email,
            'name'=>$name,
            'message'=>$message
        ];
    
       $sent= Mail::to('hamzatariqcs3@gmail.com')->send(new ContactMe($details));
       
       if($sent) {
        $details=[ 
            'email'=>$email,
            'name'=>$name,
            'message'=>$message,
            "guest" => true
        ];
           $sent= Mail::to($email)->send(new ContactMe($details));
            if($sent) {
                $contact = new ContactMeModel();
                $contact->name=$name;
                $contact->email=$email;
                $contact->message=$message;
                $contact->save();  
                return redirect()->back()->with('success', 'Thank you for contacting me!');
            } else {
                // Redirect back with an error message
                return redirect()->back()->with('error', 'Failed to send email. Please try again.');
            }
        }

        // Redirect back or to a success page
    }


    public function resume(){
        $results = DB::select('select * from  personalskill');

        dd($results);

    }
}
