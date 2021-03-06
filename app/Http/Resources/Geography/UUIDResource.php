<?php

namespace App\Http\Resources\Geography;

use Illuminate\Http\Resources\Json\JsonResource;

class UUIDResource extends JsonResource
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
            'uuid' => $this->uuid
        ];
    }
}
