<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AppointmentDiagnosisTestResult;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppointmentDiagnosisTestResultPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the appointmentDiagnosisTestResult can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list appointmentdiagnosistestresults');
    }

    /**
     * Determine whether the appointmentDiagnosisTestResult can view the model.
     */
    public function view(
        User $user,
        AppointmentDiagnosisTestResult $model
    ): bool {
        return $user->hasPermissionTo('view appointmentdiagnosistestresults');
    }

    /**
     * Determine whether the appointmentDiagnosisTestResult can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create appointmentdiagnosistestresults');
    }

    /**
     * Determine whether the appointmentDiagnosisTestResult can update the model.
     */
    public function update(
        User $user,
        AppointmentDiagnosisTestResult $model
    ): bool {
        return $user->hasPermissionTo('update appointmentdiagnosistestresults');
    }

    /**
     * Determine whether the appointmentDiagnosisTestResult can delete the model.
     */
    public function delete(
        User $user,
        AppointmentDiagnosisTestResult $model
    ): bool {
        return $user->hasPermissionTo('delete appointmentdiagnosistestresults');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete appointmentdiagnosistestresults');
    }

    /**
     * Determine whether the appointmentDiagnosisTestResult can restore the model.
     */
    public function restore(
        User $user,
        AppointmentDiagnosisTestResult $model
    ): bool {
        return false;
    }

    /**
     * Determine whether the appointmentDiagnosisTestResult can permanently delete the model.
     */
    public function forceDelete(
        User $user,
        AppointmentDiagnosisTestResult $model
    ): bool {
        return false;
    }
}
