<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndustrijaResource extends JsonResource
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
            'Naziv industrije->'=>$this->resource->nazivIndustrije,
            'Opis->'=>$this->resource->opis
        ];
    }
}
