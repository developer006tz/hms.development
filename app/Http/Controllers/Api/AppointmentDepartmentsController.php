<?php
namespace App\Http\Controllers\Api;

use App\Models\Department;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentCollection;

class AppointmentDepartmentsController extends Controller
{
    public function index(
        Request $request,
        Appointment $appointment
    ): DepartmentCollection {
        $this->authorize('view', $appointment);

        $search = $request->get('search', '');

        $departments = $appointment
            ->departments()
            ->search($search)
            ->latest()
            ->paginate();

        return new DepartmentCollection($departments);
    }

    public function store(
        Request $request,
        Appointment $appointment,
        Department $department
    ): Response {
        $this->authorize('update', $appointment);

        $appointment->departments()->syncWithoutDetaching([$department->id]);

        return response()->noContent();
    }

    public function destroy(
        Request $request,
        Appointment $appointment,
        Department $department
    ): Response {
        $this->authorize('update', $appointment);

        $appointment->departments()->detach($department);

        return response()->noContent();
    }
}
