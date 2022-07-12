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
      $events = Event::get();
      $event = Event::with("location", "category")
                    ->findOrFail($id);
      $locations = Location::get();
      $categories = Category::get();

      return view("events/show", compact("event", "events", "locations", "categories"));
    }


    public function edit($id)
    {
      $events = Event::get();
      $event = Event::with("location", "category")
                    ->findOrFail($id);
      $locations = Location::get();
      $categories = Category::get();

      return view("events/edit", compact("event", "events","locations", "categories"));
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        "title_cz" => "sometimes|nullable|max:255",
        "title_en" => "required|max:255",
        "start_date" => "required|date",
        "end_date" => "sometimes|nullable|date",
        // "time" => "time",
        "location_id" => "required|numeric",
        "category_id" => "numeric|nullable",
        "is_paid" => "required|boolean",
        "price" => "sometimes|nullable|numeric",
        "capacity" => "sometimes|nullable|numeric",
        "qr_code_image" => "sometimes|nullable|url",
        "description_cz" => "sometimes|nullable|min:10",
        "description_en" => "required",
        "instructions_cz" => "sometimes|nullable|min:10",
        "instructions_en" => "required|min:10",
        "is_phone_required" => "required|boolean",
        "is_recurring" => "boolean|nullable",
        "is_featured" => "required|boolean",

      ]);

      $event = new Event;

      $event->title_cz = $request->input("title_cz") ?? null;
      $event->title_en = $request->input("title_en") ?? null;
      $event->start_date = $request->input("start_date") ?? null;
      $event->time = $request->input("time") ?? null;
      $event->end_date = $request->input("end_date") ?? null;
      $event->location_id = $request->input("location_id") ?? null;
      $event->category_id = $request->input("category_id") ?? null;
      $event->is_paid = $request->input("is_paid") ?? null;
      $event->price = $request->input("price") ?? null;
      $event->capacity = $request->input("capacity") ?? null;
      $event->qr_code_image = $request->input("qr_code_image") ?? null;
      $event->description_cz = $request->input("description_cz") ?? null;
      $event->description_en = $request->input("description_en") ?? null;
      $event->instructions_cz = $request->input("instructions_cz") ?? null;
      $event->instructions_en = $request->input("instructions_en") ?? null;
      $event->is_phone_required = $request->input("is_phone_required") ?? null;
      $event->is_recurring = $request->input("is_recurring") ?? null;
      $event->is_featured = $request->input("is_featured") ?? null;


      $event->save();

      session()->flash("success", 'The event was successfully created!');

      return redirect(route("events.show", $event->id));
    }

    public function update(Request $request, $id)
    {
      $event = Event::with("location", "category")
                    ->findOrFail($id);

                    $event->title_cz = $request->input("title_cz") ?? null;
                    $event->title_en = $request->input("title_en") ?? null;
                    $event->start_date = $request->input("start_date") ?? null;
                    $event->time = $request->input("time") ?? null;
                    $event->end_date = $request->input("end_date") ?? null;
                    $event->location_id = $request->input("location_id") ?? null;
                    $event->category_id = $request->input("category_id") ?? null;
                    $event->is_paid = $request->input("is_paid") ?? null;
                    $event->price = $request->input("price") ?? null;
                    $event->capacity = $request->input("capacity") ?? null;
                    $event->qr_code_image = $request->input("qr_code_image") ?? null;
                    $event->description_cz = $request->input("description_cz") ?? null;
                    $event->description_en = $request->input("description_en") ?? null;
                    $event->instructions_cz = $request->input("instructions_cz") ?? null;
                    $event->instructions_en = $request->input("instructions_en") ?? null;
                    $event->is_phone_required = $request->input("is_phone_required") ?? null;
                    $event->is_recurring = $request->input("is_recurring") ?? null;
                    $event->is_featured = $request->input("is_featured") ?? null;
              
              
                    $event->save();
      session()->flash("success", 'The event was successfully updated!');

      return redirect(route("events.show", $event->id));
    }


    public function destroy($id)
    {
      $event = Event::findOrFail($id);

      $event->delete();

      session()->flash("success", 'The event was successfully deleted!');

      return redirect(route("events.index"));


    }
}
