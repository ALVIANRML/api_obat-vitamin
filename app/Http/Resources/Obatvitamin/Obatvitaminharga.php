<?php

namespace App\Http\Resources\Obatvitamin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Obatvitaminharga extends JsonResource
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
            'obat_dewasa' =>$this->obat_dewasa,
            'obat_anak' =>$this->obat_anak,
            'harga' =>$this->harga,



            ];
    }
}
