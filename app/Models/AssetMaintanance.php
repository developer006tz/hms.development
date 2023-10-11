<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssetMaintanance extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'asset_id',
        'request_date',
        'staff_id',
        'asset_maintanance_description',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'asset_maintanances';

    protected $casts = [
        'request_date' => 'date',
    ];

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function maintananceRecord()
    {
        return $this->hasOne(MaintananceRecord::class);
    }
}
