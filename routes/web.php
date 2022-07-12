<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

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
    return view('footer');
});

Route::get('admin/locations', [LocationController::class, 'index']);
Route::get('admin/locations/{id}', [LocationController::class, 'show']);
Route::get('admin/locations{id}/edit', [LocationController::class, 'edit']);


// Route::get('/movies/{movieId}/edit', ['App\Http\Controllers\MovieController', 'edit'])->name('movie.edit');