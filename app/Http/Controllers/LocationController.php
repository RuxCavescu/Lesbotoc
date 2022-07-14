<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {

        $locations = Location::get();
        return view("locations.index", compact("locations"));
    }

    public function details($id)
    {
        $location = Location::findOrFail($id);
        return view("locations.details", compact("location"));
    }

    public function create()

    {
        $location =  new Location;
        $locations = Location::get();

        return view("locations.create", compact("location"));
        // return view("locations.create");
    }

    public function store(Request $request)

    {
        $location = new Location;

        $location->name = $request->input('location_name');
        $location->address = $request->input('address');
        $location->latitude = $request->input('latitude');
        $location->longtitude = $request->input('longtitude');
        $location->location_website = $request->input('website');

        session()->flash('success_message', 'New location registered.');

        return redirect(url('locations.index' . $location->id));
    }
}
