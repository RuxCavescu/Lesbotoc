<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::get();

        return view('contacts.index', compact('contacts'));
    }



    public function detail($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contacts.detail', compact('contact'));
    }



    public function edit($id)
    {
        // find the contact to be edited by id
        $contact = Contact::findOrFail($id);

        return view('contacts.index', compact('contact'));
    }



    public function update(Request $request, $id) 
    {

        // find contact for editing
        $contact = Contact::findOrFail($id);

        // fills in the properties of the contact with values coming in from the form
        $contact->name = $request->name ?? null;
        $contact->email = $request->email ?? null;
        $contact->phone = $request->phone ?? null;

        // saves the object to the DB
        $contact->save();

        session()->flash('success_message', 'Success, contact updated!');

        // redirect to the list of contacts
        return redirect ( url('admin/contacts'));
    }



    public function destroy(Request $request, $id)
    {
        // find the contact
        $contact = Contact::findOrFail($id);

        // delete the entry from the DB
        $contact->delete();

        session()->flash('success_message', 'Success, contact deleted!');

        // redirect to the list of available contacts
        return redirect( url('admin/contacts') );
    }



    public function create()
    {
        // prepare the empty object
        $contact = new Contact;
        $contacts = Contact::get();

        // display the form and pass the contact and contacts variables
        return view('contacts.create', compact('contact', 'contacts'));

    }



    public function store(Request $request)
    {   
        // prepares the empty object
        $contact = new Contact;

        // fills in the properties of the new object with values coming in from the form
        $contact->name = $request->name ?? null;
        $contact->email = $request->email ?? null;
        $contact->phone = $request->phone ?? null;
        $contact->is_subscribed = $request->is_subscribed ?? false;

        // saves the object to the DB
        $contact->save();

        session()->flash('success_message', 'Success, contact added!');

        // redirects to the list of contacts
        return redirect( route('contacts.index') );
    }

}
