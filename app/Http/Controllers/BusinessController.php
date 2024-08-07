<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusinessRegistrationRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Business;
use App\Services\BusinessService;

class BusinessController extends Controller
{
    protected $businessService;

    public function __construct(BusinessService $businessService)
    {
        $this->businessService = $businessService;
    }

    public function index()
    {
        $businesses = $this->businessService->getAllPaginated();
        return view('businesses.index', ['businesses' => $businesses]);
    }

    public function show(Business $business)
    {
        return view('businesses.show', ['business' => $business]);
    }

    public function store(BusinessRegistrationRequest $request): RedirectResponse
    {
        $this->businessService->create($request->validated());
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
        $this->businessService->update($business, $request->validated());
        return redirect('/users/dashboard/businesses');
    }

    public function destroy(Business $business)
    {
        $this->businessService->delete($business);
        return redirect('/users/dashboard/businesses');
    }
}
