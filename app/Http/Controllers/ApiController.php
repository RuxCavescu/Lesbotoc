<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class ApiController extends Controller
{
    public function showEvents(Request $request) 
    {
        $query = Event::with("image");

        $date = $request->query('date');
        
        if ($date) {
          $query->where('start_date', 'like', $date);
                
        }
        return $query->get();
      
    }

    public function showEventsByDate(Request $request)
    {
      $date = $request->date;
      $events = Event::query()
                ->where('start_date', 'like', $date)
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
