<?php

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
    return view('flight/index');
});
Route::get('/flight',function(){
   return view('flight/flight-1');
})->name('flight1');
Route::get('/flight_details',function(){
   return view('flight/flight-details');
})->name('flight2');
Route::get('/voucher',function(){
    return view('flight/voucher');
})->name('voucher');

