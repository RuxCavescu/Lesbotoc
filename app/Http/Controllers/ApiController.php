<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class ApiController extends Controller
{
    public function showEvents() 
    {
        $events = Event::get();

        return $events;
    }
}
