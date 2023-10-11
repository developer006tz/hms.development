<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Credit extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'credit_client',
        'credit_date',
        'credit_address',
        'credit_phonenumber',
        'staff_id',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'credit_date' => 'date',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
