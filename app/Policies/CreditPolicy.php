<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Credit;
use Illuminate\Auth\Access\HandlesAuthorization;

class CreditPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the credit can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list credits');
    }

    /**
     * Determine whether the credit can view the model.
     */
    public function view(User $user, Credit $model): bool
    {
        return $user->hasPermissionTo('view credits');
    }

    /**
     * Determine whether the credit can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create credits');
    }

    /**
     * Determine whether the credit can update the model.
     */
    public function update(User $user, Credit $model): bool
    {
        return $user->hasPermissionTo('update credits');
    }

    /**
     * Determine whether the credit can delete the model.
     */
    public function delete(User $user, Credit $model): bool
    {
        return $user->hasPermissionTo('delete credits');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete credits');
    }

    /**
     * Determine whether the credit can restore the model.
     */
    public function restore(User $user, Credit $model): bool
    {
        return false;
    }

    /**
     * Determine whether the credit can permanently delete the model.
     */
    public function forceDelete(User $user, Credit $model): bool
    {
        return false;
    }
}
