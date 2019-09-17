<?php

namespace App\Http\Resources\Topo;

use App\Models\Topo\Tag;
use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var Tag $this */
        return [
            'k' => $this->k,
            'v' => $this->v,
            'dsc' => $this->getTagName()
        ];
    }
}
