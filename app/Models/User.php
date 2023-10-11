<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use App\Models\Scopes\Searchable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;
    use HasFactory;
    use Searchable;
    use HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'user_type',
        'table_name',
        'password',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function allStaff()
    {
        return $this->hasMany(Staff::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function superAdmins()
    {
        return $this->hasMany(SuperAdmin::class);
    }

    public function hospitalAdmins()
    {
        return $this->hasMany(HospitalAdmin::class);
    }

    public function hospital2()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }

    public function isSuperAdmin(): bool
    {
        return $this->hasRole('super-admin');
    }
}
