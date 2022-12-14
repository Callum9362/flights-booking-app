<?php

use App\Http\Controllers\AirlineController;
use App\Http\Controllers\AirportController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});


Route::prefix('airlines')->name('airlines.')->group(function () {
    Route::get('', [AirlineController::class, 'index'])->name('index');
    Route::post('/store', [AirlineController::class, 'store'])->name('store');
    Route::post('/delete/{id}', [AirlineController::class, 'delete'])->name('delete');
});


Route::prefix('airports')->name('airports.')->group(function () {
    Route::get('', [AirportController::class, 'index'])->name('index');
    Route::post('/store', [AirportController::class, 'store'])->name('store');
    Route::post('/delete/{id}', [AirportController::class, 'delete'])->name('delete');
});
