<?php

namespace App\Http\Resources\Geography;

use App\Models\Geography\Place;
use Illuminate\Http\Resources\Json\JsonResource;

class PlaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var Place $this */
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'geo' => $this->geo,
            'tags' => GeogTagResource::collection($this->geogTags)
        ];
    }
}
