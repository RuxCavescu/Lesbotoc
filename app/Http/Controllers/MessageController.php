<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Message;


class MessageController extends Controller
{

    //store contact in DB
    public function store(Request $request)

    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'message' => 'required'
        ]);

        //to check if user is already stored in DB under this email ??
        $contact = Contact::where("email", "=", $request->input("email"))->first();

        //if it isnt there - store it ??
        if ($contact === null) {
            $contact = new Contact;

            $contact->name = $request->input('name') ?? null;
            $contact->email = $request->input('email') ?? null;
            $contact->phone = $request->input('phone') ?? null;
            $contact->is_subscribed = $request->input('is_subscribed') ?? false;


            $contact->save();
        }


        //send message to DB

        $message = new Message;
        $message->message = $request->input('message') ?? null;
        $message->contact_id = $contact->id;
        $message->save();
        return response()->json(['success_message' => 'Thank you for contacting us.'], 200);
    }
}
