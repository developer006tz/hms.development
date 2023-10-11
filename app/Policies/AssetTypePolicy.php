<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AssetType;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssetTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the assetType can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list assettypes');
    }

    /**
     * Determine whether the assetType can view the model.
     */
    public function view(User $user, AssetType $model): bool
    {
        return $user->hasPermissionTo('view assettypes');
    }

    /**
     * Determine whether the assetType can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create assettypes');
    }

    /**
     * Determine whether the assetType can update the model.
     */
    public function update(User $user, AssetType $model): bool
    {
        return $user->hasPermissionTo('update assettypes');
    }

    /**
     * Determine whether the assetType can delete the model.
     */
    public function delete(User $user, AssetType $model): bool
    {
        return $user->hasPermissionTo('delete assettypes');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete assettypes');
    }

    /**
     * Determine whether the assetType can restore the model.
     */
    public function restore(User $user, AssetType $model): bool
    {
        return false;
    }

    /**
     * Determine whether the assetType can permanently delete the model.
     */
    public function forceDelete(User $user, AssetType $model): bool
    {
        return false;
    }
}
