<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PatientAppointmentDiagnosis;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientAppointmentDiagnosisPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the patientAppointmentDiagnosis can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list patientappointmentdiagnoses');
    }

    /**
     * Determine whether the patientAppointmentDiagnosis can view the model.
     */
    public function view(User $user, PatientAppointmentDiagnosis $model): bool
    {
        return $user->hasPermissionTo('view patientappointmentdiagnoses');
    }

    /**
     * Determine whether the patientAppointmentDiagnosis can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create patientappointmentdiagnoses');
    }

    /**
     * Determine whether the patientAppointmentDiagnosis can update the model.
     */
    public function update(User $user, PatientAppointmentDiagnosis $model): bool
    {
        return $user->hasPermissionTo('update patientappointmentdiagnoses');
    }

    /**
     * Determine whether the patientAppointmentDiagnosis can delete the model.
     */
    public function delete(User $user, PatientAppointmentDiagnosis $model): bool
    {
        return $user->hasPermissionTo('delete patientappointmentdiagnoses');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete patientappointmentdiagnoses');
    }

    /**
     * Determine whether the patientAppointmentDiagnosis can restore the model.
     */
    public function restore(
        User $user,
        PatientAppointmentDiagnosis $model
    ): bool {
        return false;
    }

    /**
     * Determine whether the patientAppointmentDiagnosis can permanently delete the model.
     */
    public function forceDelete(
        User $user,
        PatientAppointmentDiagnosis $model
    ): bool {
        return false;
    }
}
