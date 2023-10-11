<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuperAdmin extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'email',
        'phonenumber',
        'password',
        'user_id',
        'phonenumber_two',
        'phonenumber_three',
        'address',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'super_admins';

    protected $hidden = ['password'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
