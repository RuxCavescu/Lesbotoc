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
    {
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

        $location->name = $request->input('location_name') ?? null;
        $location->address = $request->input('address') ?? null;
        $location->latitude = $request->input('latitude') ?? null;
        $location->longtitude = $request->input('longtitude') ?? null;
        $location->location_website = $request->input('website') ?? null;

        $location->save();

        // session()->flash('success_message', 'New location registered.');

        return redirect(route('locations.index'));
    }

    public function destroy($id)

    {
        $location = Location::findOrfail($id);

        $location->delete();

        return redirect(route('locations.index'));
    }

    public function update(Request $request, $id)

    {
        $location = Location::findOrfail($id);
        $location->name = $request->input('name') ?? null;
        $location->address = $request->input('address') ?? null;
        $location->latitude = $request->input('latitude') ?? null;
        $location->longtitude = $request->input('longtitude') ?? null;
        $location->location_website = $request->input('website') ?? null;

        $location->save();

        return redirect(route('locations.index'));
    }
}
