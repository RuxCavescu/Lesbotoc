<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\React\ReactAppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/footer', function () {     //just to try-out footer - can be removed!
    return view('layouts.footer');
});

Route::post('/register', [
  RegisteredUserController::class, "store"
]);


// Route::get("/events/register", [
//   RegistrationController::class, "create"
// ])->name("registration.create");



// Route::get('/homepage', function () {
//   return view('users.homepage.homepage');
// })->name('users-homepage');

// Route::get('/events', function () {
//   return view('users.events.events');
// })->name('users-events');

// Route::get('/about-us', function () {
//   return view('users.about.about');
// })->name('users-about');

Route::get('/events/{id}', [
  ReactAppController::class, 'renderApp'
  ])->whereNumber("id");

Route::get('/{path?}', [
  ReactAppController::class, 'renderApp'
  ])->whereIn('path', ['events', '', 'about-us', "events/{id}", "registration-deleted", "registration-confirmed"])->whereNumber("id");

Route::get('/confirm/registration/{id}', [
  RegistrationController::class, 'confirmRegistration'
  ])->whereNumber("id")->name("registration.confirmation");

Route::get('/delete/registration/{id}', [
  RegistrationController::class, 'deleteRegistration'
  ])->whereNumber("id")->name("registration.deletion");



// Route::get('/thank-your-for-registration', function () {
//     return view('emails/confirmed');
// })->name("confirmed");

// Route::get('/registration-is-deleted', function () {
//   return view('emails/deleted');
// })->name("deleted");


