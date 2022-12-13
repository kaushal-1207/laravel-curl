<?php

use Illuminate\Support\Facades\Route;
use Ixudra\Curl\Facades\Curl;

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

Route::get('/curl', function () {
    
    // Send a GET request to: http://www.foo.com/bar
    $response = Curl::to('https://www.google.co.in/')->get();
    dd($response);

});

