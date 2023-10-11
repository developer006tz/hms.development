<?php

namespace App\Http\Controllers\Api;

use App\Models\StaffType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\StaffTypeResource;
use App\Http\Resources\StaffTypeCollection;

class StaffTypeController extends Controller
{
    public function index(Request $request): StaffTypeCollection
    {
        $this->authorize('view-any', StaffType::class);

        $search = $request->get('search', '');

        $staffTypes = StaffType::search($search)
            ->latest()
            ->paginate();

        return new StaffTypeCollection($staffTypes);
    }

    public function store(Request $request): StaffTypeResource
    {
        $this->authorize('create', StaffType::class);

        $validated = $request->validate([
            'staff_type_name' => ['required', 'max:255', 'string'],
            'staff_type_description' => ['nullable', 'max:255', 'string'],
        ]);

        $staffType = StaffType::create($validated);

        return new StaffTypeResource($staffType);
    }

    public function show(
        Request $request,
        StaffType $staffType
    ): StaffTypeResource {
        $this->authorize('view', $staffType);

        return new StaffTypeResource($staffType);
    }

    public function update(
        Request $request,
        StaffType $staffType
    ): StaffTypeResource {
        $this->authorize('update', $staffType);

        $validated = $request->validate([
            'staff_type_name' => ['required', 'max:255', 'string'],
            'staff_type_description' => ['nullable', 'max:255', 'string'],
        ]);

        $staffType->update($validated);

        return new StaffTypeResource($staffType);
    }

    public function destroy(Request $request, StaffType $staffType): Response
    {
        $this->authorize('delete', $staffType);

        $staffType->delete();

        return response()->noContent();
    }
}
