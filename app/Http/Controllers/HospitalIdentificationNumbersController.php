<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\HospitalIdentificationNumbers;

class HospitalIdentificationNumbersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', HospitalIdentificationNumbers::class);

        $search = $request->get('search', '');

        $allHospitalIdentificationNumbers = HospitalIdentificationNumbers::search(
            $search
        )
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.all_hospital_identification_numbers.index',
            compact('allHospitalIdentificationNumbers', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', HospitalIdentificationNumbers::class);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.all_hospital_identification_numbers.create',
            compact('hospitals')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', HospitalIdentificationNumbers::class);

        $validated = $request->validate([
            'prefix' => ['nullable', 'max:255', 'string'],
            'hospital_id' => ['nullable', 'exists:hospitals,id'],
        ]);

        $hospitalIdentificationNumbers = HospitalIdentificationNumbers::create(
            $validated
        );

        return redirect()
            ->route(
                'hosp_id_number.edit',
                $hospitalIdentificationNumbers
            )
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(
        Request $request,
        HospitalIdentificationNumbers $hospitalIdentificationNumbers
    ): View {
        $this->authorize('view', $hospitalIdentificationNumbers);

        return view(
            'app.all_hospital_identification_numbers.show',
            compact('hospitalIdentificationNumbers')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(
        Request $request,
        HospitalIdentificationNumbers $hospitalIdentificationNumbers
    ): View {
        $this->authorize('update', $hospitalIdentificationNumbers);

        $hospitals = Hospital::pluck('hospital_name', 'id');

        return view(
            'app.all_hospital_identification_numbers.edit',
            compact('hospitalIdentificationNumbers', 'hospitals')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        HospitalIdentificationNumbers $hospitalIdentificationNumbers
    ): RedirectResponse {
        $this->authorize('update', $hospitalIdentificationNumbers);

        $validated = $request->validate([
            'prefix' => ['nullable', 'max:255', 'string'],
            'hospital_id' => ['nullable', 'exists:hospitals,id'],
        ]);

        $hospitalIdentificationNumbers->update($validated);

        return redirect()
            ->route(
                'hosp_id_number.edit',
                $hospitalIdentificationNumbers
            )
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        HospitalIdentificationNumbers $hospitalIdentificationNumbers
    ): RedirectResponse {
        $this->authorize('delete', $hospitalIdentificationNumbers);

        $hospitalIdentificationNumbers->delete();

        return redirect()
            ->route('hosp_id_number.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
