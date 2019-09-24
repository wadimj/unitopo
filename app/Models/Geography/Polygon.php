<?php

namespace App\Models\Geography;

use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Polygon extends Model
{
    use SoftDeletes;
    use SpatialTrait;

    protected $table = 'geog_polygon';

    protected $fillable = ['name', 'geo'];
    protected $spatialFields = ['geo'];

    public function geogTags()
    {
        return $this->morphToMany(GeogTag::class, 'geog_taggable');
    }
}
