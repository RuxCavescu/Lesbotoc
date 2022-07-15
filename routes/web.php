<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/footer', function () {     //just to try-out footer - can be removed!
    return view('layouts.footer');
});

Route::post('/register', [
  RegisteredUserController::class, "store"
]);


Route::get("/events/register", [
  RegistrationController::class, "create"
])->name("registration.create");


Route::post("/events/store", [
  RegistrationController::class, "store"
])->name("registration.store");

Route::get('/homepage', function () {
  return view('users.homepage.homepage');
})->name('users-homepage');