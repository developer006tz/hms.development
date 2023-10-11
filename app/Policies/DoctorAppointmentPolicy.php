<?php

namespace App\Policies;

use App\Models\User;
use App\Models\DoctorAppointment;
use Illuminate\Auth\Access\HandlesAuthorization;

class DoctorAppointmentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the doctorAppointment can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list doctorappointments');
    }

    /**
     * Determine whether the doctorAppointment can view the model.
     */
    public function view(User $user, DoctorAppointment $model): bool
    {
        return $user->hasPermissionTo('view doctorappointments');
    }

    /**
     * Determine whether the doctorAppointment can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create doctorappointments');
    }

    /**
     * Determine whether the doctorAppointment can update the model.
     */
    public function update(User $user, DoctorAppointment $model): bool
    {
        return $user->hasPermissionTo('update doctorappointments');
    }

    /**
     * Determine whether the doctorAppointment can delete the model.
     */
    public function delete(User $user, DoctorAppointment $model): bool
    {
        return $user->hasPermissionTo('delete doctorappointments');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete doctorappointments');
    }

    /**
     * Determine whether the doctorAppointment can restore the model.
     */
    public function restore(User $user, DoctorAppointment $model): bool
    {
        return false;
    }

    /**
     * Determine whether the doctorAppointment can permanently delete the model.
     */
    public function forceDelete(User $user, DoctorAppointment $model): bool
    {
        return false;
    }
}
