<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Geography\GeogTagRelationalResource;
use App\Http\Resources\Geography\PlaceResource;
use App\Http\Resources\Geography\PolygonResource;
use App\Http\Resources\Geography\WayResource;
use App\Models\Geography\GeogTag;
use App\Models\Geography\Place;
use App\Models\Geography\Polygon;
use App\Models\Geography\Way;
use Illuminate\Http\Request;

class GeographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return 0;
    }

    public function tags()
    {
        return GeogTagRelationalResource::collection(GeogTag::paginate(10));
    }

    public function places()
    {
        return PlaceResource::collection(Place::paginate(10));
    }

    public function ways()
    {
        return WayResource::collection(Way::paginate(10));
    }

    public function polygons()
    {
        return PolygonResource::collection(Polygon::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
