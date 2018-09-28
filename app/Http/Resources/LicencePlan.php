<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LicencePlan extends JsonResource
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

            'cost' => $this->when(requestIncludes('licencePlans.extra'), $this->cost),
            'currency' => $this->when(requestIncludes('licencePlans.extra'), '£'),
            'payment_every' => $this->when(requestIncludes('licencePlans.extra'), $this->payment_every),

            'created_at' => $this->when(requestIncludes('licencePlans.timestamps'), $this->created_at),
            'updated_at' => $this->when(requestIncludes('licencePlans.timestamps'), $this->updated_at),

            'links' => $this->links
        ];
    }
}
