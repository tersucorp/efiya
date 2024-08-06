<?php

use App\Http\Controllers\BusinessController;
use Illuminate\Support\Facades\Route;
use App\Models\Business;
use Illuminate\Http\Request;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/services', 'services');
Route::view('/signup', 'signup');

Route::controller(BusinessController::class)->group(function () {
    Route::get('/businesses', 'index');
    Route::get('/businesses/create', 'create');
    Route::get('/businesses/{business}', 'show');
    Route::get('/businesses/{business}/edit', 'edit');
    Route::patch('/businesses/{business}', 'update');
    Route::delete('/businesses/{business}', 'destroy');
    Route::post('/business', 'store');
});


// Users
Route::view('/users/dashboard', 'users.dashboard.index');
Route::get('/users/dashboard/businesses', function () {
    $businesses = Business::latest()->paginate(20);
    return view('users.dashboard.show-businesses', ['businesses' => $businesses]);
});
