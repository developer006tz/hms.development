<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AssetMaintanance;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssetMaintanancePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the assetMaintanance can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list assetmaintanances');
    }

    /**
     * Determine whether the assetMaintanance can view the model.
     */
    public function view(User $user, AssetMaintanance $model): bool
    {
        return $user->hasPermissionTo('view assetmaintanances');
    }

    /**
     * Determine whether the assetMaintanance can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create assetmaintanances');
    }

    /**
     * Determine whether the assetMaintanance can update the model.
     */
    public function update(User $user, AssetMaintanance $model): bool
    {
        return $user->hasPermissionTo('update assetmaintanances');
    }

    /**
     * Determine whether the assetMaintanance can delete the model.
     */
    public function delete(User $user, AssetMaintanance $model): bool
    {
        return $user->hasPermissionTo('delete assetmaintanances');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete assetmaintanances');
    }

    /**
     * Determine whether the assetMaintanance can restore the model.
     */
    public function restore(User $user, AssetMaintanance $model): bool
    {
        return false;
    }

    /**
     * Determine whether the assetMaintanance can permanently delete the model.
     */
    public function forceDelete(User $user, AssetMaintanance $model): bool
    {
        return false;
    }
}
