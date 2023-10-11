<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MedicineSupplier;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicineSupplierPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the medicineSupplier can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list medicinesuppliers');
    }

    /**
     * Determine whether the medicineSupplier can view the model.
     */
    public function view(User $user, MedicineSupplier $model): bool
    {
        return $user->hasPermissionTo('view medicinesuppliers');
    }

    /**
     * Determine whether the medicineSupplier can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create medicinesuppliers');
    }

    /**
     * Determine whether the medicineSupplier can update the model.
     */
    public function update(User $user, MedicineSupplier $model): bool
    {
        return $user->hasPermissionTo('update medicinesuppliers');
    }

    /**
     * Determine whether the medicineSupplier can delete the model.
     */
    public function delete(User $user, MedicineSupplier $model): bool
    {
        return $user->hasPermissionTo('delete medicinesuppliers');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete medicinesuppliers');
    }

    /**
     * Determine whether the medicineSupplier can restore the model.
     */
    public function restore(User $user, MedicineSupplier $model): bool
    {
        return false;
    }

    /**
     * Determine whether the medicineSupplier can permanently delete the model.
     */
    public function forceDelete(User $user, MedicineSupplier $model): bool
    {
        return false;
    }
}
