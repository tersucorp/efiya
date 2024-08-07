<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusinessRegistrationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::latest()->paginate(10);
        return view('businesses.index', ['businesses' => $businesses]);
    }

    public function show(Business $business)
    {
        return view('businesses.show', ['business' => $business]);
    }

    public function store(BusinessRegistrationRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();


        // Filter out null values
        $filteredData = array_filter($validatedData, function ($value) {
            return !is_null($value);
        });

        $filteredData['user_id'] = 1;

        Business::create($filteredData);

        return redirect('/businesses');
    }

    public function create()
    {
        return view('businesses.create');
    }

    public function edit(Business $business)
    {
        return view('businesses.edit', ['business' => $business]);
    }

    public function update(BusinessRegistrationRequest $request, Business $business): RedirectResponse
    {
        $validatedData = $request->validated();

        // $filteredData = $request->except(['_token', '_method']);

        $business->update($validatedData);

        return redirect('/users/dashboard/businesses');
    }

    public function destroy(Business $business)
    {
        $business->delete();
        return redirect('/users/dashboard/businesses');
    }
}
