<?php

namespace App\Policies;

use App\Models\User;
use App\Models\MedicineCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicineCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the medicineCategory can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list medicinecategories');
    }

    /**
     * Determine whether the medicineCategory can view the model.
     */
    public function view(User $user, MedicineCategory $model): bool
    {
        return $user->hasPermissionTo('view medicinecategories');
    }

    /**
     * Determine whether the medicineCategory can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create medicinecategories');
    }

    /**
     * Determine whether the medicineCategory can update the model.
     */
    public function update(User $user, MedicineCategory $model): bool
    {
        return $user->hasPermissionTo('update medicinecategories');
    }

    /**
     * Determine whether the medicineCategory can delete the model.
     */
    public function delete(User $user, MedicineCategory $model): bool
    {
        return $user->hasPermissionTo('delete medicinecategories');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete medicinecategories');
    }

    /**
     * Determine whether the medicineCategory can restore the model.
     */
    public function restore(User $user, MedicineCategory $model): bool
    {
        return false;
    }

    /**
     * Determine whether the medicineCategory can permanently delete the model.
     */
    public function forceDelete(User $user, MedicineCategory $model): bool
    {
        return false;
    }
}
