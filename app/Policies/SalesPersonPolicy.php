<?php

namespace App\Policies;

use App\Models\User;
use App\Models\SalesPerson;
use Illuminate\Auth\Access\HandlesAuthorization;

class SalesPersonPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the salesPerson can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list salespeople');
    }

    /**
     * Determine whether the salesPerson can view the model.
     */
    public function view(User $user, SalesPerson $model): bool
    {
        return $user->hasPermissionTo('view salespeople');
    }

    /**
     * Determine whether the salesPerson can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create salespeople');
    }

    /**
     * Determine whether the salesPerson can update the model.
     */
    public function update(User $user, SalesPerson $model): bool
    {
        return $user->hasPermissionTo('update salespeople');
    }

    /**
     * Determine whether the salesPerson can delete the model.
     */
    public function delete(User $user, SalesPerson $model): bool
    {
        return $user->hasPermissionTo('delete salespeople');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete salespeople');
    }

    /**
     * Determine whether the salesPerson can restore the model.
     */
    public function restore(User $user, SalesPerson $model): bool
    {
        return false;
    }

    /**
     * Determine whether the salesPerson can permanently delete the model.
     */
    public function forceDelete(User $user, SalesPerson $model): bool
    {
        return false;
    }
}
