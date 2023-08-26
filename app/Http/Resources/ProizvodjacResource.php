<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProizvodjacResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Id->'=>$this->resource->id,
            'Ime proizvodjaca->'=>$this->resource->imeProizvodjaca,
            'Opis proizvodjaca->'=>$this->resource->opis,
            'Industrija->'=>new IndustrijaResource($this->resource->industrija)
        ];
    }
}
