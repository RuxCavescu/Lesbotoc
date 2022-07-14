<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
