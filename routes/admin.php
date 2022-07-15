<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Used for all routes for Admin panel. Put /admin prefix automatically
|
*/

// Admin/ Events routes

Route::get('/', [function () {
  
  return view('homepage.admin-homepage');
}])->name("homepage");

Route::get('/events', [
  EventController::class, "index"
])->name("events.index");

Route::get('/events/{id}', [
  EventController::class, "show"
])->whereNumber("id")->name("events.show");

Route::get('/events/{id}/participants', [
  EventController::class, "display"
])->whereNumber("id")->name("events.display");



Route::get('/events/{id}/edit', [
  EventController::class, "edit"
])->whereNumber("id")->name("events.edit");

Route::post('/events', [
  EventController::class, "store"
])->name("events.store");


Route::patch('/events/{id}', [
  EventController::class, "update"
])->whereNumber("id")->name("events.update");


Route::delete('/events/{id}', [
  EventController::class, "destroy"
])->whereNumber("id")->name("events.destroy");

Route::get("/events/{id}/registrations/export", [
  EventController::class, "export"
])->whereNumber("id")->name("events.export");



// Admin/Contacts routes

Route::get('/contacts', [
    ContactController::class, 'index'
    ])->name('contacts-index');

// Route::get(
//   '/contacts/subscribed', [
//     ContactController::class,'showSubscribed'
//     ])->name('subscribed-users');

Route::get(
  '/contacts/subscribed/export', [
    ContactController::class,'export'
  ])->name('contacts-export');

Route::get(
  '/contacts/create', [
    ContactController::class, 'create'
  ])->name('create-contact');

Route::post(
  '/contacts/create', [
    ContactController::class, 'store'
  ])->name('save-contact');

Route::get('/contacts/{id}/edit', [
    ContactController::class, 'detail'
  ])->name('edit-detail');

Route::post(
  '/contacts/{id}/edit', [
    ContactController::class, 'update'
  ])->name('update-contact');

Route::delete(
  '/contacts/{id}/delete', [
    ContactController::class, 'destroy'
  ])->name('delete-contact');


// Admin/Images routes

Route::get(
  '/images', [
    ImageController::class,'index'
  ])->name('image-index');

Route::post(
  '/images/add-image', [
    ImageController::class,'store'
  ])->name('save-image');

Route::delete(
  '/images/{id}/delete', [
    ImageController::class,'destroy'
  ])->name('delete-image');


//admin location routes

Route::get('/locations', [LocationController::class, 'index'])
  ->name('locations.index');

Route::get('/locations/detail/{id}', [LocationController::class, 'details'])
  ->name('locations.details');

Route::get('/locations/create', [LocationController::class, 'create'])
  ->name('locations.create');

Route::post('/locations/create', [LocationController::class, 'store'])
  ->name('locations.store');

Route::delete('/locations/detail/{id}', [LocationController::class, 'destroy'])
  ->name('locations.delete');

Route::post('/locations/edit/', [LocationController::class, 'update'])->name('locations.update');
