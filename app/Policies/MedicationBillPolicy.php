<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MedicationBill;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicationBillPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the medicationBill can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list medicationbills');
    }

    /**
     * Determine whether the medicationBill can view the model.
     */
    public function view(User $user, MedicationBill $model): bool
    {
        return $user->hasPermissionTo('view medicationbills');
    }

    /**
     * Determine whether the medicationBill can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create medicationbills');
    }

    /**
     * Determine whether the medicationBill can update the model.
     */
    public function update(User $user, MedicationBill $model): bool
    {
        return $user->hasPermissionTo('update medicationbills');
    }

    /**
     * Determine whether the medicationBill can delete the model.
     */
    public function delete(User $user, MedicationBill $model): bool
    {
        return $user->hasPermissionTo('delete medicationbills');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete medicationbills');
    }

    /**
     * Determine whether the medicationBill can restore the model.
     */
    public function restore(User $user, MedicationBill $model): bool
    {
        return false;
    }

    /**
     * Determine whether the medicationBill can permanently delete the model.
     */
    public function forceDelete(User $user, MedicationBill $model): bool
    {
        return false;
    }
}
