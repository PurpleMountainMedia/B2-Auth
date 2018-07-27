<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class School extends JsonResource
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
            'address_line1' => $this->when(requestIncludes('schools.address'), $this->address_line1),
            'address_line2' => $this->when(requestIncludes('schools.address'), $this->address_line2),
            'address_town' => $this->when(requestIncludes('schools.address'), $this->address_town),
            'address_county' => $this->when(requestIncludes('schools.address'), $this->address_county),
            'address_postcode' => $this->when(requestIncludes('schools.address'), $this->address_postcode),
            'address_country' => $this->when(requestIncludes('schools.address'), $this->address_country),
            'phone' => $this->when(requestIncludes('schools.extra'), $this->phone),
            'website' => $this->when(requestIncludes('schools.extra'), $this->website),

            'organisation' => new Organisation($this->whenLoaded('organisation')),

            'created_at' => $this->when(requestIncludes('schools.timestamps'), $this->created_at),
            'updated_at' => $this->when(requestIncludes('schools.timestamps'), $this->updated_at),

            'links' => $this->links,
        ];
    }
}
