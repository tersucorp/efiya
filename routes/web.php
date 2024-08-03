<?php

use Illuminate\Support\Facades\Route;
use App\Models\Business;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/businesses', function () {
    $businesses = Business::paginate(10);
    return view('businesses.index', ['businesses' => $businesses]);
});

Route::get('/businesses/create', function () {
    return view('businesses.create');
});

Route::get('/businesses/{businessId}', function ($businessId) {
    return view('businesses.show', ['business' => Business::find($businessId)]);
});

Route::post('/business', function (Request $request) {
    $data = $request->all();

    // Filter out null values
    $filteredData = array_filter($data, function ($value) {
        return !is_null($value);
    });

    $filteredData['user_id'] = 1;

    Business::create($filteredData);

    return redirect('/businesses');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/signup', function () {
    return view('signup');
});
