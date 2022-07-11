<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Used for all routes for Admin panel. Put /admin prefix automatically
|
*/

Route::get('/events', [
  EventController::class, "index"
])->name("events.index");


Route::get('/events/{id}', [
  EventController::class, "show"
])->whereNumber("id")->name("events.show");
