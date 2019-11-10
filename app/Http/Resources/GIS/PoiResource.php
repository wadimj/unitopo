<?php


namespace App\Http\Resources\GIS;

use App\Models\Geography\Place;
use Illuminate\Http\Resources\Json\JsonResource;

class PoiResource extends JsonResource
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
            'type' => 'Feature',
            'properties' => null,
            'geometry' => $this->geo
        ];
    }
}
