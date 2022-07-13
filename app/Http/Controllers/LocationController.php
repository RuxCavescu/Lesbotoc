<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {

        $locations = Location::get();
        foreach ($locations as $location) {
            return view('locations.index', compact('locations', 'location'));
        }
    }

    public function details($id)
    {       //pass variable to view - also use compact!
        $locations = Location::get();
        $location = Location::findOrFail($id);
        return view('locations.details', compact('location', 'locations'));
    }

    public function create()

    {
        $location =  new Location;
        $locations = Location::get();

        return view('locations.create', compact('location', 'locations'));
    }

    public function store(Request $request)

    {
        $location = new Location;

        $location->name = $request->input('location_name');
        $location->address = $request->input('address');
        $location->latitude = $request->input('latitude');
        $location->longtitude = $request->input('longtitude');
        $location->location_website = $request->input('website');

        $location->save();

        session()->flash('success_message', 'New location registered.');

        return redirect(route('locations.index'));
    }

    public function delete($id)

    {
        $location = Location::findOrfail($id);

        return view('/locations.delete', compact('location'));
    }
}
