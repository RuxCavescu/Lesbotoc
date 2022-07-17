<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Event;
use App\Models\Contact;



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

      $event_id = $request->input("event_id") ?? null;
      

      $contact = new Contact;
      $contact->name = $request->input("name") ?? null;
      $contact->email = $request->input("email") ?? null;
      $contact->phone = $request->input("phone") ?? null;
      $contact->source = $request->input("event_name") . " " .$request->input("event_date");
      $contact->is_subscribed = 0;

  
      $contact->save();

      // Second, save a new registration into database
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

