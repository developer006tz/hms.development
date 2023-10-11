<?php

namespace App\Policies;

use App\Models\User;
use App\Models\DoctorAppointmentPayment;
use Illuminate\Auth\Access\HandlesAuthorization;

class DoctorAppointmentPaymentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the doctorAppointmentPayment can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list doctorappointmentpayments');
    }

    /**
     * Determine whether the doctorAppointmentPayment can view the model.
     */
    public function view(User $user, DoctorAppointmentPayment $model): bool
    {
        return $user->hasPermissionTo('view doctorappointmentpayments');
    }

    /**
     * Determine whether the doctorAppointmentPayment can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create doctorappointmentpayments');
    }

    /**
     * Determine whether the doctorAppointmentPayment can update the model.
     */
    public function update(User $user, DoctorAppointmentPayment $model): bool
    {
        return $user->hasPermissionTo('update doctorappointmentpayments');
    }

    /**
     * Determine whether the doctorAppointmentPayment can delete the model.
     */
    public function delete(User $user, DoctorAppointmentPayment $model): bool
    {
        return $user->hasPermissionTo('delete doctorappointmentpayments');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete doctorappointmentpayments');
    }

    /**
     * Determine whether the doctorAppointmentPayment can restore the model.
     */
    public function restore(User $user, DoctorAppointmentPayment $model): bool
    {
        return false;
    }

    /**
     * Determine whether the doctorAppointmentPayment can permanently delete the model.
     */
    public function forceDelete(
        User $user,
        DoctorAppointmentPayment $model
    ): bool {
        return false;
    }
}
