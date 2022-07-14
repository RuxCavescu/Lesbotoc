<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Location;
use App\Models\Category;
use App\Models\Registration;
use App\Models\Image;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EventRegistrationsExport;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index()
    {
      
      $events = Event::where('start_date', '<', date('Y-m-d'))->update(['is_active'=>false]);

      $events = Event::where('start_date', '>', date('Y-m-d'))->update(['is_active'=>true]);

      $events = Event::orderBy("start_date")
                      ->get();

      
    
      $event = new Event;
      
      // foreach ($events as $event) {
      //   $event->setIsActive();
      // }
      
      $locations = Location::get();
      $categories = Category::get();
      $images = Image::get();

      return view("events/index", compact("events", "event", "locations", "categories", "images"));
    }

    public function show($id)
    {
      // $registrations = Registration::query()
      //                             ->where("event_id", $id)
      //                             ->get();
      $events = Event::orderBy("start_date")
                      ->get();

                      
      $images = Image::get();
      $event = Event::with("location", "category", "image")
                    ->findOrFail($id);
      $locations = Location::get();
      $categories = Category::get();
      $registrations = Registration::with("contact")
                                  ->where("event_id", $id)
                                  ->get();


      if ($event->capacity && $event->capacity > 0) {
        $already_registered = Registration::where("event_id", $event->id)->count();

      }


      return view("events/show", compact("event", "events", "locations", "categories", "images", "registrations"));
    }

    public function display($id) 
    {
      $registrations = Registration::with("contact")
                                  ->where("event_id", $id)
                                  ->get();
      $events = Event::orderBy("start_date")
                                  ->get();
      $images = Image::get();
      $event = Event::with("location", "category", "images")
                    ->findOrFail($id);
      $locations = Location::get();
      $categories = Category::get();

      return view("events/show", compact("event", "events","locations", "categories", "registrations", "images"));
    }


    public function edit($id)
    {
      $registrations = Registration::query()
                                  ->where("event_id", $id)
                                  ->get();
      $events = Event::orderBy("start_date")
                                  ->get();
      $images = Image::get();
      $event = Event::with("location", "category")
                    ->findOrFail($id);
      $locations = Location::get();
      $categories = Category::get();

      return view("events/edit", compact("event", "events","locations", "categories", "registrations", "images", "registrations"));
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        "title_cz" => "nullable",
        "title_en" => "required",
        "start_date" => "required|date",
        "end_date" => "nullable|date",
        "location_id" => "required|numeric",
        "category_id" => "numeric|nullable",
        "is_paid" => "required|boolean",
        "price" => "sometimes|nullable|numeric",
        "capacity" => "sometimes|nullable|numeric",
        "qr_code_image" => "sometimes|nullable|url",
        "description_cz" => "sometimes|nullable",
        "description_en" => "required",
        "instructions_cz" => "nullable",
        "instructions_en" => "required",
        "is_phone_required" => "required|boolean",
        "is_recurring" => "boolean|nullable",
        "is_featured" => "required|boolean",
        "image_id" => "required"

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
      $event->setIsActive();
      $event->image_id = $request->input("image_id") ?? null;
      


      // dd($request->input("image_id"));


      $event->save();




      session()->flash("success", 'The event was successfully created!');

      return redirect(route("events.show", $event->id));
    }

    public function update(Request $request, $id)
    {

      $this->validate($request, [
        "title_cz" => "nullable",
        "title_en" => "required",
        "start_date" => "required|date",
        "end_date" => "nullable|date",
        "location_id" => "required|numeric",
        "category_id" => "numeric|nullable",
        "is_paid" => "required|boolean",
        "price" => "sometimes|nullable|numeric",
        "capacity" => "sometimes|nullable|numeric",
        "qr_code_image" => "sometimes|nullable|url",
        "description_cz" => "sometimes|nullable",
        "description_en" => "required",
        "instructions_cz" => "nullable",
        "instructions_en" => "required",
        "is_phone_required" => "required|boolean",
        "is_recurring" => "boolean|nullable",
        "is_featured" => "required|boolean",
        "image_id" => "required"

      ]);
      
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
                    $event->image_id = $request->input("image_id") ?? null;
                    $event->setIsActive();
              
              
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

    public function export($id) 
    {
        return Excel::download(new EventRegistrationsExport($id), 'registrations.xlsx');
    }
}
