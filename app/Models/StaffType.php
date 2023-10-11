<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StaffType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['staff_type_name', 'staff_type_description'];

    protected $searchableFields = ['*'];

    protected $table = 'staff_types';

    public function allStaff()
    {
        return $this->hasMany(Staff::class);
    }
}
