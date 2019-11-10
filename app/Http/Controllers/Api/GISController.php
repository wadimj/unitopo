<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GIS\PoiResource;
use App\Models\Geography\Place;

class GISController extends Controller
{
    public function poi()
    {
        return [
            'type' => 'FeatureCollection',
            'features' => PoiResource::collection(Place::all())
        ];
    }
}
