<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhysiotherapyType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['type_name', 'type_description', 'hospital_id'];

    protected $searchableFields = ['*'];

    protected $table = 'physiotherapy_types';

    public function physiotherapyApplications()
    {
        return $this->hasMany(PhysiotherapyApplication::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
