<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicineCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['medicine_category_name', 'hospital_id'];

    protected $searchableFields = ['*'];

    protected $table = 'medicine_categories';

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
