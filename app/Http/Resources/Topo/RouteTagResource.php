<?php

namespace App\Http\Resources\Topo;

use Illuminate\Http\Resources\Json\JsonResource;

class RouteTagResource extends JsonResource
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
            'k' => $this->k,
            'v' => $this->v
        ];
    }
}
