<?php

namespace App\Http\Resources\Topo;

use App\Models\Topo\Region;
use Illuminate\Http\Resources\Json\JsonResource;

class RouteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'name'       => $this->name,
            'grades'     => GradeResource::collection($this->grades),
            'tags'       => RouteTagResource::collection($this->tags),
            'region'     => RegionResource::collection(Region::defaultOrder()->ancestorsAndSelf($this->region_id)),
            'description'=> $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
