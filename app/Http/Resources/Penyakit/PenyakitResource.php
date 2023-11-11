<?php

namespace App\Http\Resources\Penyakit;

use App\Models\gejala;
use App\Models\obatvitamin;
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
        'id_penyakit'=> $this->id_penyakit,
        'nama'  => $this->nama,
        'penyebab'  => $this->penyebab,
        'pengobatan' => $this->pengobatan,


        ];
    }
}
