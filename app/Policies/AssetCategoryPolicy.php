<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AssetCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssetCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the assetCategory can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list assetcategories');
    }

    /**
     * Determine whether the assetCategory can view the model.
     */
    public function view(User $user, AssetCategory $model): bool
    {
        return $user->hasPermissionTo('view assetcategories');
    }

    /**
     * Determine whether the assetCategory can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create assetcategories');
    }

    /**
     * Determine whether the assetCategory can update the model.
     */
    public function update(User $user, AssetCategory $model): bool
    {
        return $user->hasPermissionTo('update assetcategories');
    }

    /**
     * Determine whether the assetCategory can delete the model.
     */
    public function delete(User $user, AssetCategory $model): bool
    {
        return $user->hasPermissionTo('delete assetcategories');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete assetcategories');
    }

    /**
     * Determine whether the assetCategory can restore the model.
     */
    public function restore(User $user, AssetCategory $model): bool
    {
        return false;
    }

    /**
     * Determine whether the assetCategory can permanently delete the model.
     */
    public function forceDelete(User $user, AssetCategory $model): bool
    {
        return false;
    }
}
