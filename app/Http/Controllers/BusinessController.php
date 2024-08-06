<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index(){
        $businesses = Business::latest()->paginate(10);
        return view('businesses.index', ['businesses' => $businesses]);
    }

    public function show(Business $business){
        return view('businesses.show', ['business' => $business]);
    }

    public function store(Request $request) {
        $data = $request->all();

        $request->validate([
            'business_name' => ['required', 'string', 'max:255'],
            'business_type' => ['required', 'string', 'max:255'],
            'tax_id' => ['nullable', 'string', 'max:255'],
            'reg_no' => ['nullable', 'string', 'max:255'],
            'website_url' => ['nullable', 'url', 'max:255'],
            'house_number' => ['nullable', 'string', 'max:255'],
            'street' => ['nullable', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['nullable', 'string', 'max:255'],
            'zip_code' => ['nullable', 'string', 'max:10'],
            'description' => ['required', 'string'],
            'services' => ['required', 'string', 'max:255'],
            'twitter' => ['nullable', 'string', 'max:255'],
            'facebook' => ['nullable', 'string', 'max:255'],
            'instagram' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'secondary_phone' => ['nullable', 'string', 'max:20'],
            'opening_hours' => ['nullable', 'date_format:H:i'],
            'closing_hours' => ['nullable', 'date_format:H:i'],
            'delivery_options' => ['nullable', 'string'],
            'return_policy' => ['nullable', 'string'],
            'is_featured' => ['boolean'],
            'ratings_count' => ['integer', 'min:0'],
            'average_rating' => ['numeric', 'min:0', 'max:5'],
            'avatar' => ['nullable', 'string'],
            'banner' => ['nullable', 'string'],
        ]);


        // Filter out null values
        $filteredData = array_filter($data, function ($value) {
            return !is_null($value);
        });

        $filteredData['user_id'] = 1;

        Business::create($filteredData);

        return redirect('/businesses');
    }

    public function create(){
        return view('businesses.create');
    }

    public function edit(Business $business){
        return view('businesses.edit', ['business' => $business]);
    }

    public function update(Business $business, Request $request){
        $request->validate([
            'business_name' => ['required', 'string', 'max:255'],
            'business_type' => ['required', 'string', 'max:255'],
            'tax_id' => ['nullable', 'string', 'max:255'],
            'reg_no' => ['nullable', 'string', 'max:255'],
            'website_url' => ['nullable', 'url', 'max:255'],
            'house_number' => ['nullable', 'string', 'max:255'],
            'street' => ['nullable', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'country' => ['nullable', 'string', 'max:255'],
            'zip_code' => ['nullable', 'string', 'max:10'],
            'description' => ['required', 'string'],
            'services' => ['required', 'string', 'max:255'],
            'twitter' => ['nullable', 'string', 'max:255'],
            'facebook' => ['nullable', 'string', 'max:255'],
            'instagram' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'secondary_phone' => ['nullable', 'string', 'max:20'],
            'opening_hours' => ['nullable', 'date_format:H:i'],
            'closing_hours' => ['nullable', 'date_format:H:i'],
            'delivery_options' => ['nullable', 'string'],
            'return_policy' => ['nullable', 'string'],
            'is_featured' => ['boolean'],
            'ratings_count' => ['integer', 'min:0'],
            'average_rating' => ['numeric', 'min:0', 'max:5'],
            'avatar' => ['nullable', 'string'],
            'banner' => ['nullable', 'string'],
        ]);

        $filteredData = $request->except(['_token', '_method']);

        $business->update($filteredData);

        return redirect('/users/dashboard/businesses');
    }

    public function destroy(Business $business) {
        $business->delete();
        return redirect('/users/dashboard/businesses');
    }
}
