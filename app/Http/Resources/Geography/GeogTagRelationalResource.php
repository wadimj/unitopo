<?php

namespace App\Http\Resources\Geography;

use App\Models\Geography\GeogTag;
use Illuminate\Http\Resources\Json\JsonResource;

class GeogTagRelationalResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var GeogTag $this */
        return [
            'id' => $this->id,
            'k' => $this->k,
            'v' => $this->v,
            'geographicalObjects' => $this->relatedGeogsUUIDs()
        ];
    }
}
