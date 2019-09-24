<?php

namespace App\Http\Resources\Geography;

use App\Models\Geography\Way;
use Illuminate\Http\Resources\Json\JsonResource;

class WayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var Way $this */
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'geo' => $this->geo,
            'tags' => GeogTagResource::collection($this->geogTags)
        ];
    }
}
