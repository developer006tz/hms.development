<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaintananceRecord extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'asset_maintanance_id',
        'maintanance_type',
        'maintanance_cost',
        'maintanance_vendor',
        'maintanance_description',
        'maintanance_category',
        'maintanance_date',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'maintanance_records';

    protected $casts = [
        'maintanance_date' => 'date',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function assetMaintanance()
    {
        return $this->belongsTo(AssetMaintanance::class);
    }
}
