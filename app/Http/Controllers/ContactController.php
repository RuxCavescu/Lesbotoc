<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactsExport;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::orderBy('name')->get();
        $subscribedContacts = Contact::query()
            ->where('is_subscribed', 'like', '1')
            ->get();

        return view('contacts.index', compact('contacts', 'subscribedContacts'));
    }



    public function export() 
    {
        $date = Carbon::today()->setTimezone('Europe/Prague')->toDateString();
        $time = Carbon::now()->toTimeString();
        return Excel::download(new ContactsExport, 'subscribed_contacts_'.$date.'_'.$time.'.xlsx');
    }



    public function detail($id)
    {
        $contact = Contact::findOrFail($id);
        $contacts = Contact::get();

        return view('contacts.detail', compact('contact', 'contacts'));
    }



    public function edit($id)
    {
        // find the contact to be edited by id
        $contact = Contact::findOrFail($id);


        return view('contacts.index', compact('contact'));
    }



    public function update(Request $request, $id) 
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'phone' => 'nullable|numeric',
            'is_subscribed' => 'required|boolean'
        ]);

        // find contact for editing
        $contact = Contact::findOrFail($id);

        // fills in the properties of the contact with values coming in from the form
        $contact->name = $request->name ?? null;
        $contact->email = $request->email ?? null;
        $contact->phone = $request->phone ?? null;
        $contact->is_subscribed = $request->is_subscribed ?? false;

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

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns|unique:contacts,email',
            'phone' => 'nullable|numeric',
            'is_subscribed' => 'required|boolean'
        ]);

        // prepares the empty object
        $contact = new Contact;

        // fills in the properties of the new object with values coming in from the form
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone ?? null;
        $contact->source = $request->source ?? 'added manually';
        $contact->is_subscribed = $request->is_subscribed ?? false;

        // saves the object to the DB
        $contact->save();

        session()->flash('success_message', 'Success, contact added!');

        // redirects to the list of contacts
        return redirect( route('contacts-index') );
    }

    public function showSubscribed() 
    {
        $subscribedContacts = Contact::query()
            ->where('is_subscribed', 'like', '1')
            ->orderBy('name', 'ASC')
            ->get();

        return view('contacts.show-subscribed', compact('subscribedContacts'));
    }

    public function unsubscribeContact($id)
    {
      $contact = Contact::findOrFail($id);

      $contact->is_subscribed = 0;

      $contact->save();

      return redirect(url("/unsubscribed"));

    }

}
