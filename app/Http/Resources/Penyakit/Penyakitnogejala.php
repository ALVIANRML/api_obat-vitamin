<?php

namespace App\Http\Resources\Penyakit;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Penyakitnogejala extends JsonResource
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
            'gejala'    => $this->gejala,
            'penyebab'  => $this->penyebab,
            'pengobatan' => $this->pengobatan,


            ];
    }
}
