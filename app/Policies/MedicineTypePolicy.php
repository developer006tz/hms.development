<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MedicineType;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicineTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the medicineType can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list medicinetypes');
    }

    /**
     * Determine whether the medicineType can view the model.
     */
    public function view(User $user, MedicineType $model): bool
    {
        return $user->hasPermissionTo('view medicinetypes');
    }

    /**
     * Determine whether the medicineType can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create medicinetypes');
    }

    /**
     * Determine whether the medicineType can update the model.
     */
    public function update(User $user, MedicineType $model): bool
    {
        return $user->hasPermissionTo('update medicinetypes');
    }

    /**
     * Determine whether the medicineType can delete the model.
     */
    public function delete(User $user, MedicineType $model): bool
    {
        return $user->hasPermissionTo('delete medicinetypes');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete medicinetypes');
    }

    /**
     * Determine whether the medicineType can restore the model.
     */
    public function restore(User $user, MedicineType $model): bool
    {
        return false;
    }

    /**
     * Determine whether the medicineType can permanently delete the model.
     */
    public function forceDelete(User $user, MedicineType $model): bool
    {
        return false;
    }
}
