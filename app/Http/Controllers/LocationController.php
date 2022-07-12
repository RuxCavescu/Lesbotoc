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

    public function show($id)
    {
        $location = Location::findOrFail($id);
        return view("locations.details", compact("location"));
    }

    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view("locations.{$id}.edit", compact("location"));
    }
}
