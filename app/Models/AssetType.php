<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssetType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'asset_type_name',
        'asset_type_description',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'asset_types';

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
