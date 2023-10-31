<?php

namespace App\Http\Resources\Penyakit;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PenyakitResource extends JsonResource
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
        'id'        => $this->id,
        'penyakit'  => $this->penyakit,
        'penyebab'  => $this->penyebab,
        
        ];
    }
}
