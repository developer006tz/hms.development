<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['module_name', 'table_id', 'table_name'];

    protected $searchableFields = ['*'];

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }
}
