<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Topo\TagResource;
use App\Models\Topo\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return TagResource::collection(Tag::paginate(10));
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
     * @param  \App\Models\Topo\Tag  $tag
     * @return TagResource
     */
    public function show(Tag $tag)
    {
        return new TagResource($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topo\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topo\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        Tag::destroy($tag->id);
        return response()->json(null, 204);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function distinctKeys()
    {
        return \DB::table('tags')
            ->select(\DB::raw('k, count(*) as count'))
            ->groupBy('k')
            ->get();
    }

    public function valuesForKeys($key)
    {
        return Tag::where('k', $key)->pluck('v');
    }

    public function compact()
    {
        $tags = $this->distinctKeys();
        $return = [];

        foreach ($tags as $k => $tag){
            $ret = [];
            $ret['k'] = $tag->k;
            $ret['v'] = Tag::where('k', $tag->k)->pluck('v');

            $return[] = $ret;
        }

        return $return;
    }
}
