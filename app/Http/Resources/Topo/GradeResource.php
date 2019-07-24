<?php

namespace App\Http\Resources\Topo;

use Illuminate\Http\Resources\Json\JsonResource;

class GradeResource extends JsonResource
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
            'id'       => $this->id,
            'scale_id' => $this->scale_id,
            'position' => $this->position,
            'value'    => $this->value
        ];
    }
}
