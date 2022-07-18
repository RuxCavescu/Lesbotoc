<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class ApiController extends Controller
{
    public function showEvents() 
    {
        $events = Event::with("image")
                    ->get();
      
        return $events;
    }

    public function showEventDetail($id)
    {
      $event = Event::with("location", "category", "image")
                      ->findOrFail($id);

      return $event;

    }
}
