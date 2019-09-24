<?php

namespace App\Models\Geography;

use Illuminate\Database\Eloquent\Model;

class GeogTag extends Model
{
    protected $fillable = ['k', 'v'];

    /**
     * Get model with associated GeogTag
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function geogPlaces(){
        return $this->morphedByMany(Place::class, 'geog_taggable');
    }

    /**
     * Get model with associated GeogTag
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function geogWays(){
        return $this->morphedByMany(Way::class, 'geog_taggable');
    }

    /**
     * Get model with associated GeogTag
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function geogPolygons(){
        return $this->morphedByMany(Polygon::class, 'geog_taggable');
    }

    public function relatedGeogsUUIDs()
    {
        $places = $this->geogPlaces()->pluck('uuid')->all();
        $ways = $this->geogWays()->pluck('uuid')->all();
        $polygons = $this->geogPolygons()->pluck('uuid')->all();

        return array_merge($places,$ways,$polygons);
    }
}
