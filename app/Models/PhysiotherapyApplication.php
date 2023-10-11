<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhysiotherapyApplication extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'doctor_id',
        'physiotherapy_type_id',
        'physiotherapy_category_id',
        'physiotherapy_entry_date',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'physiotherapy_applications';

    protected $casts = [
        'physiotherapy_entry_date' => 'date',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function physiotherapyType()
    {
        return $this->belongsTo(PhysiotherapyType::class);
    }

    public function physiotherapyCategory()
    {
        return $this->belongsTo(PhysiotherapyCategory::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'doctor_id');
    }

    public function patients()
    {
        return $this->belongsToMany(Patient::class);
    }
}
