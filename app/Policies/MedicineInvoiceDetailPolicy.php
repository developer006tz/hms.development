<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MedicineInvoiceDetail;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicineInvoiceDetailPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the medicineInvoiceDetail can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list medicineinvoicedetails');
    }

    /**
     * Determine whether the medicineInvoiceDetail can view the model.
     */
    public function view(User $user, MedicineInvoiceDetail $model): bool
    {
        return $user->hasPermissionTo('view medicineinvoicedetails');
    }

    /**
     * Determine whether the medicineInvoiceDetail can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create medicineinvoicedetails');
    }

    /**
     * Determine whether the medicineInvoiceDetail can update the model.
     */
    public function update(User $user, MedicineInvoiceDetail $model): bool
    {
        return $user->hasPermissionTo('update medicineinvoicedetails');
    }

    /**
     * Determine whether the medicineInvoiceDetail can delete the model.
     */
    public function delete(User $user, MedicineInvoiceDetail $model): bool
    {
        return $user->hasPermissionTo('delete medicineinvoicedetails');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete medicineinvoicedetails');
    }

    /**
     * Determine whether the medicineInvoiceDetail can restore the model.
     */
    public function restore(User $user, MedicineInvoiceDetail $model): bool
    {
        return false;
    }

    /**
     * Determine whether the medicineInvoiceDetail can permanently delete the model.
     */
    public function forceDelete(User $user, MedicineInvoiceDetail $model): bool
    {
        return false;
    }
}
