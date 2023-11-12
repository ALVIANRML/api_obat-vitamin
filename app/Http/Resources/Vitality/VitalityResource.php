<?php

namespace App\Http\Resources\Vitality;

use App\Models\gejala;
use App\Models\penyakit;
use App\Models\obatvitamin;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VitalityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $obatvitamin    = obatvitamin::where('id',$this->obatvitamin_id)->first();
        $penyakit       = penyakit::where('id',$this->penyakit_id)->first();
        return
        [
            'id'                => $this->id,
            'obatvitamin_id'    => $obatvitamin,
            'penyakit_id'       => $penyakit,
        ];
        // return parent::toArray($request);
    }
}
