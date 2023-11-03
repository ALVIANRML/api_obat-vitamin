<?php

namespace App\Http\Resources\Obatvitamin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ObatvitaminResource extends JsonResource
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
        'nama'      => $this->nama,
        'deskripsi' => $this->deskripsi,
        'umur_obat' =>$this->umur_obat,

        ];
    }
}
