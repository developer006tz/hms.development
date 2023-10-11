<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Asset extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'asset_no',
        'asset_name',
        'asset_purchase_date',
        'asset_purchase_cost',
        'asset_current_value',
        'asset_manufacture',
        'asset_startdate_warant',
        'asset_enddate_warant',
        'asset_description',
        'asset_type_id',
        'asset_category_id',
        'asset_status',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'asset_purchase_date' => 'date',
        'asset_startdate_warant' => 'date',
        'asset_enddate_warant' => 'date',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function assetType()
    {
        return $this->belongsTo(AssetType::class);
    }

    public function assetCategory()
    {
        return $this->belongsTo(AssetCategory::class);
    }

    public function assignment()
    {
        return $this->hasOne(Assignment::class);
    }

    public function assetMaintanance()
    {
        return $this->hasOne(AssetMaintanance::class);
    }
}
