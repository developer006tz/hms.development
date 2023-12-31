<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Invoice;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvoicePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the invoice can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list invoices');
    }

    /**
     * Determine whether the invoice can view the model.
     */
    public function view(User $user, Invoice $model): bool
    {
        return $user->hasPermissionTo('view invoices');
    }

    /**
     * Determine whether the invoice can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create invoices');
    }

    /**
     * Determine whether the invoice can update the model.
     */
    public function update(User $user, Invoice $model): bool
    {
        return $user->hasPermissionTo('update invoices');
    }

    /**
     * Determine whether the invoice can delete the model.
     */
    public function delete(User $user, Invoice $model): bool
    {
        return $user->hasPermissionTo('delete invoices');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete invoices');
    }

    /**
     * Determine whether the invoice can restore the model.
     */
    public function restore(User $user, Invoice $model): bool
    {
        return false;
    }

    /**
     * Determine whether the invoice can permanently delete the model.
     */
    public function forceDelete(User $user, Invoice $model): bool
    {
        return false;
    }
}
