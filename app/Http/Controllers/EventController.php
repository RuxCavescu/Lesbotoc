<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Location;
use App\Models\Category;

class EventController extends Controller
{
    public function index()
    {
      $events = Event::get();
      $event = new Event;
      $locations = Location::get();
      $categories = Category::get();

      return view("events/index", compact("events", "event", "locations", "categories"));
    }

    public function show($id)
    {
      $event = Event::with("location", "category")
                    ->findOrFail($id);

      return view("events/show", compact("event"));
    }

    // public function create()
    // {
    //   $event = new Event;

    //   return view("events/create", compact("event"))
    // }


    public function edit($id)
    {
      $event = Event::with("location", "category")
                    ->findOrFail($id);
      $locations = Location::get();
      $categories = Category::get();

      return view("events/edit", compact("event", "locations", "categories"));
    }

    public function store(Request $request)
    {

      // CREATE VALIDATION FOR EVENT FORM

    //   $this->validate($request, [
    //     'name' => "required|regex:/^[\pL\s\-]+$/u",
    //     'email' => 'required|email',
    //     'message' => 'required|min:10'
    // ], [
    //   'name.regex' => "The name could contain only letters, hyphens and spaces"
    // ]);

      $event = new Event;

      dump($request);

      Event::create($request->all());

      return redirect("events.show", $event->id);
    }

    public function update(Request $request, $id)
    {
      $event = Event::with("location", "category")
                    ->findOrFail($id);

      Event::update($request->all());
      // $event->fill($request->all())->save();

      return redirect("events.show", $event->id);
    }
}
