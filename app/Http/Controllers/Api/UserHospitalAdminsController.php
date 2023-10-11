<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\HospitalAdminResource;
use App\Http\Resources\HospitalAdminCollection;

class UserHospitalAdminsController extends Controller
{
    public function index(Request $request, User $user): HospitalAdminCollection
    {
        $this->authorize('view', $user);

        $search = $request->get('search', '');

        $hospitalAdmins = $user
            ->hospitalAdmins()
            ->search($search)
            ->latest()
            ->paginate();

        return new HospitalAdminCollection($hospitalAdmins);
    }

    public function store(Request $request, User $user): HospitalAdminResource
    {
        $this->authorize('create', HospitalAdmin::class);

        $validated = $request->validate([
            'firstname' => ['nullable', 'max:255', 'string'],
            'middlename' => ['nullable', 'max:255', 'string'],
            'lastname' => ['nullable', 'max:255', 'string'],
            'username' => ['required', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'phonenumber' => ['required', 'max:255', 'string'],
            'password' => ['required'],
            'hospital_id' => ['required', 'exists:hospitals,id'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $hospitalAdmin = $user->hospitalAdmins()->create($validated);

        return new HospitalAdminResource($hospitalAdmin);
    }
}
