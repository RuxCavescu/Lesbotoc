<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Event;
use App\Models\Contact;
use Illuminate\Support\Str;

use App\Mail\ConfirmEmail;
use Illuminate\Support\Facades\Mail;




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

      if ($request->input("is_phone_required") == 1) {
        $this->validate($request, [
          "phone" => "required|regex:/^([0-9\s\-\+\(\)]*)$/",
          // "phone" => "required",
          "name" => "required|max:120",
           "email" => "required|email",
        ]);
      } else {
        $this->validate($request, [
          "name" => "required|max:120",
          "email" => "required|email",
        ]);
      }

      


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

      // Generating some random token

      $registration_token = Str::random(16);
      $registration->event_id = $request->input("event_id") ?? null;
      $registration->contact_id = $contact->id;
      $registration->auth_token = $registration_token;
      $registration->is_confirmed = $request->input("is_confirmed") ?? null;


      // Third, increment number in "already registered" column in the event table

      $event = Event::findOrFail($registration->event_id);


      if ($event->already_registered === null) {
        $event->already_registered = 1;
      } elseif ($event->already_registered >= $event->capacity) {

        return response()->json(['errors' => [
          "full" => ['Sorry, event registrations has reached full capacity.']
        ]],422);

      } else {
        $event->already_registered = $event->already_registered + 1;
      }

      $event->save();

      $registration->save();

      session()->flash("success", "You were successfully registered for the event!");

      // Sending email to the user
      $details = [
        "contact_name" => $contact->name,
        "contact_email" => $contact->email,
        "contact_id" => $contact->id,
        "event_title" => $event->title_en,
        "start_date" => $event->start_date,
        "registration_token" => $registration_token,
        "qr_url" => $event->qr_code_image,
        "is_subscribed" => $contact->is_subscribed
      ];

      $reveiverEmailAddress = $contact->email;
      Mail::to($reveiverEmailAddress)->send(new ConfirmEmail($details));

    }


    public function confirmRegistration($token)
    {
      $registration = Registration::where("auth_token", "=", $token)->first();

      $registration->is_confirmed = 1;

      $registration->save();

      return redirect(url("/registration-confirmed"));

      // return redirect(route("confirmed"));

      // return view("emails/confirmed");
    }

    public function deleteRegistration($token)
    {
      // $registration = Registration::findOrFail($id);
      $registration = Registration::where("auth_token", "=", $token)->first();

      // $contact_db = Contact::where("email", "=", $request->input("email"))->first();

      $registration->delete();

      return redirect(url("/registration-deleted"));

      // return redirect(route("deleted"));
      // return view("emails/deleted");
    }
}

