<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'package_name',
        'package_description',
        'package_mountly_fee',
        'package_year_fee',
    ];

    protected $searchableFields = ['*'];

    public function hospitals()
    {
        return $this->hasMany(Hospital::class);
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }
}
