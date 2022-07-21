<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Message;
use Mail; 
use App\Mail\ContactFormMail;


class MessageController extends Controller
{

    //store contact in DB
    public function store(Request $request)

    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/',
            'message' => 'required'
        ]);

        //to check if user is already stored in DB under this email ??
        $contact = Contact::where("email", "=", $request->input("email"))->first();

        //if it isnt there - store it ??
        if ($contact === null) {
            $contact = new Contact;

            $contact->name = $request->input('name') ?? null;
            $contact->email = $request->input('email') ?? null;
            $contact->source  = "Website contact form";
            $contact->phone = $request->input('phone') ?? null;
            $contact->is_subscribed = $request->input('is_subscribed') ?? false;

            $contact->save();
        }


        //send message to DB

        $message = new Message;
        $message->message = $request->input('message') ?? null;
        $message->contact_id = $contact->id;
        $message->save();


        // Mail::to("lesbotoctest@gmail.com")->send(new ContactFormMail());

        \Mail::send('emails/contact_us',
        array(
            'name' => $contact->name,
            'email' => $contact->email,
            'user_message' => $message->message,
        ), function($message) use ($request)
          {
             $message->from($request->email);
             $message->to('lesbotoctest@gmail.com');
          });

          

        return response()->json(['success_message' => 'Thank you for contacting us.'], 200);

    }




    
}
