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
        $location = Location::findOrFail($id);
        $locations = Location::get();
        $isNew = false;
        return view('locations.details', compact('location', 'locations', "isNew"));
    }

    public function create()

    {
        $location =  new Location;
        $locations = Location::get();
        $isNew = true;
        return view('locations.details', compact('location', 'locations', "isNew"));
    }

    public function store(Request $request)

    {
        $this->validate($request, [

            'location_name' => 'required',
            'address' => 'required',
            'latitude' => 'required|numeric',
            'longtitude' => 'required|numeric',
            'location_website' => 'sometimes|url'
        ]);

        $location = new Location;

        $location->name = $request->input('location_name') ?? null;
        $location->address = $request->input('address') ?? null;
        $location->latitude = $request->input('latitude') ?? null;
        $location->longtitude = $request->input('longtitude') ?? null;
        $location->location_website = $request->input('website') ?? null;

        $location->save();

        session()->flash('success_message', ' New location created.');

        return redirect(route('locations.index'));
    }

    public function destroy($id)

    {
        $location = Location::findOrfail($id);

        $location->delete();

        session()->flash('success_message', ' Location successfully deleted.');

        return redirect(route('locations.index'));
    }

    public function update(Request $request, $id)

    {
        $this->validate($request, [

            'location_name' => 'required',
            'address' => 'required',
            // 'latitude' => 'required|regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/',
            // 'longtitude' => 'required|regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/',
            'location_website' => 'sometimes|url'
        ]);


        $location = Location::findOrfail($id);

        $location->name = $request->input('location_name') ?? null;
        $location->address = $request->input('address') ?? null;
        $location->latitude = $request->input('latitude') ?? null;
        $location->longtitude = $request->input('longtitude') ?? null;
        $location->location_website = $request->input('website') ?? null;

        $location->save();

        session()->flash('success_message', ' Location successfully updated.');

        return redirect(route('locations.index'));
    }
}
