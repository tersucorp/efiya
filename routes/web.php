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
    dd(Business::find($businessId));
    return view('business', ['business' => Business::find($businessId)]);
});

Route::get('/marketplace', function (){
    return view('marketplace', ['businesses' => Business::all()]);
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/signup', function(){
    return view('signup');
});
