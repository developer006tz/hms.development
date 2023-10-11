<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhysiotherapyCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['category_name', 'hospital_id'];

    protected $searchableFields = ['*'];

    protected $table = 'physiotherapy_categories';

    public function physiotherapyApplications()
    {
        return $this->hasMany(PhysiotherapyApplication::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
