<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assignment extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'asset_id',
        'staff_id',
        'assignment_date',
        'assignment_return_date',
        'assignment_condition',
        'assignment_usage_history',
        'assignment_description',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'assignment_date' => 'date',
        'assignment_return_date' => 'date',
    ];

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
