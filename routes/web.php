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


//Home page
Route::get('/', function () {
    return view('pages/home');
});
//Single listing
Route::get('/listing/{slug}/{id}', function () {
    return view('pages/single-listing');
});

//Show all listings
Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages/listings');
});

//User login
Route::get('/login', function () {
    return view('pages/login');
});

//User register
Route::get('/register', function () {
    return view('pages/register');
});

//user saved listings
Route::get('/account/saved', function () {
    return view('pages/saved-listings');
});

//User show status
Route::get('/account/show-status', function () {
    return view('pages/show-status');
});