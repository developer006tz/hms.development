<?php

namespace App\Http\Controllers\Api;

use App\Models\BloodGroup;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\BloodGroupResource;
use App\Http\Resources\BloodGroupCollection;

class BloodGroupController extends Controller
{
    public function index(Request $request): BloodGroupCollection
    {
        $this->authorize('view-any', BloodGroup::class);

        $search = $request->get('search', '');

        $bloodGroups = BloodGroup::search($search)
            ->latest()
            ->paginate();

        return new BloodGroupCollection($bloodGroups);
    }

    public function store(Request $request): BloodGroupResource
    {
        $this->authorize('create', BloodGroup::class);

        $validated = $request->validate([
            'blood_group_name' => ['required', 'max:255', 'string'],
            'blood_group_description' => ['required', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $bloodGroup = BloodGroup::create($validated);

        return new BloodGroupResource($bloodGroup);
    }

    public function show(
        Request $request,
        BloodGroup $bloodGroup
    ): BloodGroupResource {
        $this->authorize('view', $bloodGroup);

        return new BloodGroupResource($bloodGroup);
    }

    public function update(
        Request $request,
        BloodGroup $bloodGroup
    ): BloodGroupResource {
        $this->authorize('update', $bloodGroup);

        $validated = $request->validate([
            'blood_group_name' => ['required', 'max:255', 'string'],
            'blood_group_description' => ['required', 'max:255', 'string'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $bloodGroup->update($validated);

        return new BloodGroupResource($bloodGroup);
    }

    public function destroy(Request $request, BloodGroup $bloodGroup): Response
    {
        $this->authorize('delete', $bloodGroup);

        $bloodGroup->delete();

        return response()->noContent();
    }
}
