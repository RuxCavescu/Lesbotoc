<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Event;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegistrationStoreRequest;



class RegistrationController extends Controller
{
    public function create()
    {
      $registration = new Registration;

      return view("registrations/create", compact("registration"));


    }

    public function store(Request $request)
    {
      // First, store the contact in DB

      $this->validate($request, [
        "name" => "required|max:120",
        "email" => "required|email",
        "phone" => "required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10",
      ]);

      $event_id = $request->input("event_id") ?? null;

  

      $contact_db = Contact::where("email", "=", $request->input("email"))->first();

      if ($contact_db === null) {
        $contact = new Contact;

      } else {
        $contact = $contact_db;

        $registration_db = Registration::where("event_id", "=", $event_id)->where("contact_id", "=", $contact->id)->first();

        if ($registration_db != null) {

          // return response()->json(['error' => 'already registered'],422);
          return response()->json(['errors' => [
            "duplicate" => ['You have been already registered!']
          ]],422);


         
        }


      }
      
      $contact->name = $request->input("name") ?? null;
      $contact->email = $request->input("email") ?? null;
      $contact->phone = $request->input("phone") ?? null;
      $contact->source = $request->input("event_name") . " " .$request->input("event_date");
      $contact->is_subscribed = $request->input("is_subscribed") ?? null;

  
      $contact->save();

      // Second, save a new registration into database
      // $this->validate($request, [

      // ])

      $registration = new Registration;

      $registration->event_id = $request->input("event_id") ?? null;
      $registration->contact_id = $contact->id;
      $registration->auth_token = $request->input("auth_token") ?? null;
      $registration->is_confirmed = $request->input("is_confirmed") ?? null;


      // Third, increment number in "already registered" column in the event table

      $event = Event::findOrFail($registration->event_id);


      if ($event->already_registered === null) {
        $event->already_registered = 1;
      } elseif ($event->already_registered >= $event->capacity) {
        return back()->withErrors("Event is fully booked. You cannot register anymore.");
      } else {
        $event->already_registered = $event->already_registered + 1;
      }

      $event->save();

      $registration->save();

      session()->flash("success", "You were successfully registered for the event!");



    }
}

