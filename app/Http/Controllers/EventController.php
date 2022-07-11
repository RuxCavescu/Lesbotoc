<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
      $events = Event::get();

      return view("events/index", compact("events"));
    }

    public function show($id)
    {
      $event = Event::findOrFail($id);

      return view("events/show", compact("event"));
    }
}
