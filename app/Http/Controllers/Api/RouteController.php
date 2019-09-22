<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Topo\RouteResource;
use App\Models\Topo\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return RouteResource::collection(Route::with(['grades', 'region', 'tags'])->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topo\Route  $route
     * @return RouteResource|\Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        return new RouteResource($route);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topo\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topo\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        Route::destroy($route->id);
        return response()->json(null, 204);
    }
}
