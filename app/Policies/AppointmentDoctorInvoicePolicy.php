<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AppointmentDoctorInvoice;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppointmentDoctorInvoicePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the appointmentDoctorInvoice can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list appointmentdoctorinvoices');
    }

    /**
     * Determine whether the appointmentDoctorInvoice can view the model.
     */
    public function view(User $user, AppointmentDoctorInvoice $model): bool
    {
        return $user->hasPermissionTo('view appointmentdoctorinvoices');
    }

    /**
     * Determine whether the appointmentDoctorInvoice can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create appointmentdoctorinvoices');
    }

    /**
     * Determine whether the appointmentDoctorInvoice can update the model.
     */
    public function update(User $user, AppointmentDoctorInvoice $model): bool
    {
        return $user->hasPermissionTo('update appointmentdoctorinvoices');
    }

    /**
     * Determine whether the appointmentDoctorInvoice can delete the model.
     */
    public function delete(User $user, AppointmentDoctorInvoice $model): bool
    {
        return $user->hasPermissionTo('delete appointmentdoctorinvoices');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete appointmentdoctorinvoices');
    }

    /**
     * Determine whether the appointmentDoctorInvoice can restore the model.
     */
    public function restore(User $user, AppointmentDoctorInvoice $model): bool
    {
        return false;
    }

    /**
     * Determine whether the appointmentDoctorInvoice can permanently delete the model.
     */
    public function forceDelete(
        User $user,
        AppointmentDoctorInvoice $model
    ): bool {
        return false;
    }
}
