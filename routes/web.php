<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomTypeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get("/",[HomeController::class,"index"])->name("dashboard");

Route::prefix('room-type')->group(function () {
    Route::get("/",[RoomTypeController::class,"index"])->name("roomType.index");
});

Route::prefix('hotel')->group(function (){
    Route::get("/",[HotelController::class,"index"])->name('hotel.index');
    Route::get("/edit",[HotelController::class,"edit"])->name('hotel.edit');
});

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return Inertia::render('Dashboard/index');
})->middleware(['auth', 'verified'])->name('dashboard');

