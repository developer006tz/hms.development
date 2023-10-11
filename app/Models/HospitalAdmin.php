<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HospitalAdmin extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'username',
        'email',
        'phonenumber',
        'password',
        'hospital_id',
        'user_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'hospital_admins';

    protected $hidden = ['password'];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
