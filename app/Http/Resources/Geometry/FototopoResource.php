<?php

namespace App\Http\Resources\Geometry;

use Illuminate\Http\Resources\Json\JsonResource;

class FototopoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $ret = parent::toArray($request);
        $ret['file'] = $this->file;
        $ret['routes'] = $this->routes()->pluck('routes.id');

        return $ret;
    }
}
