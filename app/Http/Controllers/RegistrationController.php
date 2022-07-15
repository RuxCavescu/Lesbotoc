<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Event;



class RegistrationController extends Controller
{
    public function create()
    {
      $registration = new Registration;

      return view("registrations/create", compact("registration"));


    }

    public function store(Request $request)
    {
      // Saving a new registration into database
      $registration = new Registration;

      $registration->event_id = $request->input("event_id") ?? null;
      $registration->contact_id = $request->input("contact_id") ?? null;
      $registration->auth_token = $request->input("auth_token") ?? null;
      $registration->is_confirmed = $request->input("is_confirmed") ?? null;


      // Incrementing number in "already registered" column in the event table

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

// Add redirect

    }
}

