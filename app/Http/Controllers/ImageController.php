<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index() {
        $images = Image::get();

        return view('images.index', compact('images'));
    }
    
    // public function create() {
    //     $image = new Image;

    //     return view('image-index', compact('image'));
    // }

    public function store(Request $request)
    {   

        // dd($request->file('uploaded_file'));
        // dd($request->file('uploaded_file'));

        $image_name = $request->file('uploaded_file')->getClientOriginalName();

        $request->file('uploaded_file')->move(
            public_path('images'), 
            // $request->file('uploaded_file')->getClientOriginalName()
            $image_name
        );

        // $this->validate($request, [
        //     'name' => 'required|max:255',
        //     'email' => 'required|email:rfc,dns|unique:contacts,email',
        //     'phone' => 'nullable|numeric',
        //     'is_subscribed' => 'required|boolean'
        // ]);

        // // prepares the empty object
        $image = new Image;

        $image->path = '/images/'.$image_name;
        $image->alt = $request->alt ?? null;

        $image->save();

        session()->flash('success_message', 'Success, image added!');

        // // redirects to the list of contacts
        return redirect( route('image-index') );
    }


    public function destroy(Request $request, $id)
    {
        // find the contact
        $image = Image::findOrFail($id);

        // delete the entry from the DB
        $image->delete();

        session()->flash('success_message', 'Success, image deleted!');

        // redirect to the list of available contacts
        return redirect( route('image-index') );
    }
}
