<?php

namespace App\Models\Geography;

use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Way extends Model
{
    use SoftDeletes;
    use SpatialTrait;

    protected $table = 'geog_way';

    protected $fillable = ['name', 'geo'];
    protected $spatialFields = ['geo'];

    public function geogTags()
    {
        return $this->morphMany(GeogTag::class, 'geogtag');
    }
}
