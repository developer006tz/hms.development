<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MedicineStock;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicineStockPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the medicineStock can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list medicinestocks');
    }

    /**
     * Determine whether the medicineStock can view the model.
     */
    public function view(User $user, MedicineStock $model): bool
    {
        return $user->hasPermissionTo('view medicinestocks');
    }

    /**
     * Determine whether the medicineStock can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create medicinestocks');
    }

    /**
     * Determine whether the medicineStock can update the model.
     */
    public function update(User $user, MedicineStock $model): bool
    {
        return $user->hasPermissionTo('update medicinestocks');
    }

    /**
     * Determine whether the medicineStock can delete the model.
     */
    public function delete(User $user, MedicineStock $model): bool
    {
        return $user->hasPermissionTo('delete medicinestocks');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete medicinestocks');
    }

    /**
     * Determine whether the medicineStock can restore the model.
     */
    public function restore(User $user, MedicineStock $model): bool
    {
        return false;
    }

    /**
     * Determine whether the medicineStock can permanently delete the model.
     */
    public function forceDelete(User $user, MedicineStock $model): bool
    {
        return false;
    }
}
