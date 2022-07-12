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

// Admin/ Events routes


Route::get('/events', [
  EventController::class, "index"
])->name("events.index");


Route::get('/events/{id}', [
  EventController::class, "show"
])->whereNumber("id")->name("events.show");

// Route::get('/events/create', [
//   EventController::class, "create"
// ])->name("events.create");

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



// Admin/Contacts routes

Route::get('/contacts', 
[ContactController::class, 
'index'])->name('contacts-index');

Route::get('/contacts/subscribed', 
[ContactController::class, 
'showSubscribed'])->name('subscribed-users');

Route::get('/contacts/subscribed/export', 
[ContactController::class, 
'export'])->name('contacts-export');

Route::get('/contacts/create', 
[ContactController::class, 
'create'])->name('create-contact');

Route::post('/contacts/create', 
[ContactController::class, 
'store'])->name('save-contact');

Route::get('/contacts/{id}/edit', 
[ContactController::class, 
'detail'])->name('edit-detail');

Route::post('/contacts/{id}/edit', 
[ContactController::class, 
'update'])->name('update-contact');

Route::delete('/contacts/{id}/delete', 
[ContactController::class, 
'destroy'])->name('delete-contact');
