<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class ApiController extends Controller
{
    public function showEvents(Request $request) 
    {
        $query = Event::with("image")->where('start_date', '>=', date('Y-m-d'));

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
                ->where('start_date', '>=', date('Y-m-d'))
                ->get();
                    
        return $events;
    }

    public function showEventDetail($id)
    {
      $event = Event::with("location", "category", "image")
                      ->where('start_date', '>=', date('Y-m-d'))
                      ->findOrFail($id);

      return $event;

    }
}
