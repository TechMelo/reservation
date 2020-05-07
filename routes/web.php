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
})->name('index');
Route::get('/flights',function(){
    $page='flight';
   return view('flight/search_page',compact('page'));
})->name('flights');
Route::get('/tours',function(){
    $page='tour';
   return view('flight/search_page',compact('page'));
})->name('tours');

Route::get('/hotels',function(){
    $page='hotel';
   return view('flight/search_page',compact('page'));
})->name('hotels');

Route::get('/flight_details',function(){
   return view('flight/flight-details');
})->name('flight2');

Route::get('/hotel_details',function(){
   return view('hotel/hotel-details');
})->name('hotel_details');
Route::get('/tour_details',function(){
   return view('tour/tour-details');
})->name('tour_details');
Route::get('/tour_booking',function(){
   return view('tour/tour-booking');
})->name('tour_booking');

Route::get('/hotel_specs',function(){
   return view('hotel/hotel-specs');
})->name('hotel_specs');

Route::get('/voucher',function(){
    return view('voucher/index');
})->name('voucher');
Route::get('/visa_form',function(){
    return view('visa/form');
})->name('visa_form');

Route::get('/our_services',function(){
    return view('static_pages/services');
})->name('our_services');

Route::get('/our_product',function(){
    return view('static_pages/product');
})->name('our_products');
Route::get('/keys',function(){
    return view('static_pages/keys');
})->name('keys');

