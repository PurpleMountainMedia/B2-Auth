<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Organisation extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->when(requestIncludes('organisations.extra'), $this->type),

            'schools' => new SchoolCollection($this->whenLoaded('schools')),

            'created_at' => $this->when(requestIncludes('organisations.timestamps'), $this->created_at),
            'updated_at' => $this->when(requestIncludes('organisations.timestamps'), $this->updated_at),

            'links' => $this->links,
        ];
    }
}
