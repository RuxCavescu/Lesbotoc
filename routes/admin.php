<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;

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


// Admin/Contacts routes

Route::get('/contacts', 
[ContactController::class, 
'index'])->name('contacts.index');