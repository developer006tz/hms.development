<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssetCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'asset_category_name',
        'asset_category_description',
        'hospital_id',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'asset_categories';

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
