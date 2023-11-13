<?php

namespace App\Http\Resources\Vitality;

use App\Http\Resources\Obatvitamin\ObatvitaminResource;
use App\Http\Resources\Penyakit\PenyakitResource;
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
        $penyakit       = penyakit::where('id','=',$this->penyakit_id)->first();
        return
        [
            'id'                => $this->id,
            'obatvitamin_id'    => new ObatvitaminResource($obatvitamin),
            'penyakit_id'       => new PenyakitResource($penyakit),
        ];
        // return parent::toArray($request);
    }
}
