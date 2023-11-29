<?php

namespace App\Http\Resources\Rumahsakit;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RumahsakitResource extends JsonResource
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
            'id'            => $this->id,
        'nama'          => $this->nama,
        'alamat'     => $this->alamat,
        'kontak'   =>$this->kontak,
        'gambar'    =>$this->gambar,
        'map'       =>$this->map,
        ];
    }
}
