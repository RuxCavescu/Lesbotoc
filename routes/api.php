<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// WHEN PROVIDING EVENTS API TO USER VIEW, UPDATE IS_ACTIVE COLUMN, SO THAT USER CAN SEE ONLY ACTIVE EVENTS ---SUBSTITUTION FOR SCHEDULER


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/events', [
    ApiController::class, 'showEvents'
])->name("users-events");

Route::get('/events/{id}', [
    ApiController::class, 'showEventDetail'
])->whereNumber("id")->name("users-events-details");


Route::post("/registration/store", [
    RegistrationController::class, "store"
])->name("registration.store");

Route::post("message/store", [
    MessageController::class, "store"
])->name("message.store");
// event by date API endpoint:

/* Route::get('/events/{date}', [
    ApiController::Class, 'showEventsByDate'
])->name('events-by-date'); */
