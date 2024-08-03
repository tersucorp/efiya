<?php

use Illuminate\Support\Facades\Route;
use App\Models\Business;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/marketplace/business/{businessId}', function ($businessId){
    return view('business', ['business' => Business::find($businessId)]);
});

Route::get('/marketplace', function (){
    $businesses = Business::paginate(10);
    return view('marketplace', ['businesses' => $businesses]);
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/signup', function(){
    return view('signup');
});
