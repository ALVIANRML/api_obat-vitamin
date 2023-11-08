<?php

namespace App\Http\Resources\Obatvitamin;

use App\Models\penyakit;
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

        $penyakit = penyakit::where('id',$this->penyakit_id)->first();
        return[
        'id'        => $this->id,
        'nama'      => $this->nama,
        'deskripsi' => $this->deskripsi,
        'umur_obat' =>$this->umur_obat,
        'penyakit_id'=>$penyakit,

        ];
    }
}
