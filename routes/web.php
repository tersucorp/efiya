<?php

use Illuminate\Support\Facades\Route;
use App\Models\Store;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/marketplace/store/{storeId}', function ($storeId){
    return view('store', ['store' => Store::find($storeId)]);
});

Route::get('/marketplace', function (){
    return view('marketplace', ['stores' => Store::all()]);
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/signup', function(){
    return view('signup');
});
