<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AppointmentDiagnosisTest;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppointmentDiagnosisTestPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the appointmentDiagnosisTest can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list appointmentdiagnosistests');
    }

    /**
     * Determine whether the appointmentDiagnosisTest can view the model.
     */
    public function view(User $user, AppointmentDiagnosisTest $model): bool
    {
        return $user->hasPermissionTo('view appointmentdiagnosistests');
    }

    /**
     * Determine whether the appointmentDiagnosisTest can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create appointmentdiagnosistests');
    }

    /**
     * Determine whether the appointmentDiagnosisTest can update the model.
     */
    public function update(User $user, AppointmentDiagnosisTest $model): bool
    {
        return $user->hasPermissionTo('update appointmentdiagnosistests');
    }

    /**
     * Determine whether the appointmentDiagnosisTest can delete the model.
     */
    public function delete(User $user, AppointmentDiagnosisTest $model): bool
    {
        return $user->hasPermissionTo('delete appointmentdiagnosistests');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete appointmentdiagnosistests');
    }

    /**
     * Determine whether the appointmentDiagnosisTest can restore the model.
     */
    public function restore(User $user, AppointmentDiagnosisTest $model): bool
    {
        return false;
    }

    /**
     * Determine whether the appointmentDiagnosisTest can permanently delete the model.
     */
    public function forceDelete(
        User $user,
        AppointmentDiagnosisTest $model
    ): bool {
        return false;
    }
}
