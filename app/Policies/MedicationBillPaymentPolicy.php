<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MedicationBillPayment;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicationBillPaymentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the medicationBillPayment can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list medicationbillpayments');
    }

    /**
     * Determine whether the medicationBillPayment can view the model.
     */
    public function view(User $user, MedicationBillPayment $model): bool
    {
        return $user->hasPermissionTo('view medicationbillpayments');
    }

    /**
     * Determine whether the medicationBillPayment can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create medicationbillpayments');
    }

    /**
     * Determine whether the medicationBillPayment can update the model.
     */
    public function update(User $user, MedicationBillPayment $model): bool
    {
        return $user->hasPermissionTo('update medicationbillpayments');
    }

    /**
     * Determine whether the medicationBillPayment can delete the model.
     */
    public function delete(User $user, MedicationBillPayment $model): bool
    {
        return $user->hasPermissionTo('delete medicationbillpayments');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete medicationbillpayments');
    }

    /**
     * Determine whether the medicationBillPayment can restore the model.
     */
    public function restore(User $user, MedicationBillPayment $model): bool
    {
        return false;
    }

    /**
     * Determine whether the medicationBillPayment can permanently delete the model.
     */
    public function forceDelete(User $user, MedicationBillPayment $model): bool
    {
        return false;
    }
}
