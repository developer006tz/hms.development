<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\HospitalType;
use Illuminate\Http\RedirectResponse;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Hospital::class);

        $search = $request->get('search', '');

        $hospitals = Hospital::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.hospitals.index', compact('hospitals', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Hospital::class);

        $hospitalTypes = HospitalType::pluck('name', 'id');

        return view('app.hospitals.create', compact('hospitalTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Hospital::class);

        $validated = $request->validate([
            'hospital_name' => ['required', 'max:255', 'string'],
            'hospital_logo' => ['nullable', 'max:255', 'string'],
            'hospital_location' => ['required', 'max:255', 'string'],
            'hospital_address_one' => ['nullable', 'max:255', 'string'],
            'hospital_address_two' => ['nullable', 'max:255', 'string'],
            'hospital_tinnumber' => ['nullable', 'max:255', 'string'],
            'hospital_phonenumber' => ['required', 'max:255', 'string'],
            'hospital_email' => ['nullable', 'max:255', 'string'],
            'hospital_city' => ['required', 'max:255', 'string'],
            'hospital_country' => ['required', 'max:255', 'string'],
            'hospital_zipcode' => ['nullable', 'max:255', 'string'],
            'hospital_fax' => ['nullable', 'max:255', 'string'],
            'hospital_website_link' => ['nullable', 'max:255', 'string'],
            'hospital_type_id' => ['nullable', 'exists:hospital_types,id'],
        ]);

        $hospital = Hospital::create($validated);

        return redirect()
            ->route('hospitals.edit', $hospital)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Hospital $hospital): View
    {
        $this->authorize('view', $hospital);

        return view('app.hospitals.show', compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Hospital $hospital): View
    {
        $this->authorize('update', $hospital);

        $hospitalTypes = HospitalType::pluck('name', 'id');

        return view('app.hospitals.edit', compact('hospital', 'hospitalTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Hospital $hospital
    ): RedirectResponse {
        $this->authorize('update', $hospital);

        $validated = $request->validate([
            'hospital_name' => ['required', 'max:255', 'string'],
            'hospital_logo' => ['nullable', 'max:255', 'string'],
            'hospital_location' => ['required', 'max:255', 'string'],
            'hospital_address_one' => ['nullable', 'max:255', 'string'],
            'hospital_address_two' => ['nullable', 'max:255', 'string'],
            'hospital_tinnumber' => ['nullable', 'max:255', 'string'],
            'hospital_phonenumber' => ['required', 'max:255', 'string'],
            'hospital_email' => ['nullable', 'max:255', 'string'],
            'hospital_city' => ['required', 'max:255', 'string'],
            'hospital_country' => ['required', 'max:255', 'string'],
            'hospital_zipcode' => ['nullable', 'max:255', 'string'],
            'hospital_fax' => ['nullable', 'max:255', 'string'],
            'hospital_website_link' => ['nullable', 'max:255', 'string'],
            'hospital_type_id' => ['nullable', 'exists:hospital_types,id'],
        ]);

        $hospital->update($validated);

        return redirect()
            ->route('hospitals.edit', $hospital)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Hospital $hospital
    ): RedirectResponse {
        $this->authorize('delete', $hospital);

        $hospital->delete();

        return redirect()
            ->route('hospitals.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
