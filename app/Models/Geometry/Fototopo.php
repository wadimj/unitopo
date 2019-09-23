<?php

namespace App\Models\Geometry;

use App\Models\Topo\Route;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fototopo extends Model
{
    use SpatialTrait;
    use SoftDeletes;

    /**
     * The attributes that are mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'file',
        'geo_point',
        'geo_orientation'
    ];

    /**
     * The attributes that are spatial fields.
     *
     * @var array
     */
    protected $spatialFields = [
        'geo_point',
    ];

    public function routes()
    {
        return $this->belongsToMany(Route::class);
    }
}
