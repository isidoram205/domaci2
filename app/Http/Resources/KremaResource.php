<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KremaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ID->'=>$this->resource->id,
            'Naziv kreme->'=>$this->resource->naziv,
            'Cena->'=>$this->resource->cena,
            'Link slike->'=>$this->resource->link,
            'Tip kreme->'=>$this->resource->tipKreme,
            'Proizvodjac->'=> new ProizvodjacResource($this->resource->proizvodjac),
            'User->'=> new UserResource($this->resource->user)
        ];
    }
}
