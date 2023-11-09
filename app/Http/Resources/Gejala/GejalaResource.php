<?php

namespace App\Http\Resources\Gejala;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GejalaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return[
            'id'=>$this->id,
            'nama'=>$this->nama,
            'id_gejala'=>$this->id_gejala,
        ];
    }
}
