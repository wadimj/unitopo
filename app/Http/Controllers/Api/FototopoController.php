<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Geometry\FototopoResource;
use App\Models\Geometry\Fototopo;
use Illuminate\Http\Request;

class FototopoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return FototopoResource::collection(Fototopo::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Geometry\Fototopo  $fototopo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fototopo $fototopo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Geometry\Fototopo  $fototopo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fototopo $fototopo)
    {
        //
    }
}
