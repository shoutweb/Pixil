<?php

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

Route::get('/discover', function () {
    return view('discover');
});

Route::get('/artist', function () {
    return view('artist');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/support_splice', function () {
    return view('support');
});
