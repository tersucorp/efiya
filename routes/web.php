<?php

use App\Http\Controllers\BusinessController;
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

Route::get('/businesses', [BusinessController::class, 'index']);
Route::get('/businesses/create', [BusinessController::class, 'create']);
Route::get('/businesses/{business}', [BusinessController::class, 'show']);
Route::get('/businesses/{business}/edit', [BusinessController::class, 'edit']);
Route::patch('/businesses/{business}', [BusinessController::class, 'update']);
Route::delete('/businesses/{business}', [BusinessController::class, 'destroy']);
Route::post('/business', [BusinessController::class, 'store']);

Route::get('/services', function () {
    return view('services');
});

Route::get('/signup', function () {
    return view('signup');
});


// Users
Route::get('/users/dashboard', function(){
    return view('users.dashboard.index');
});

Route::get('/users/dashboard/businesses', function(){
    $businesses = Business::latest()->paginate(20);
    return view('users.dashboard.show-businesses', ['businesses' => $businesses]);
});
