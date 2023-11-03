<?php

namespace App\Http\Resources\Umur;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UmurResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
        // return parent::toArray($request);
        'id'            => $this->id,
        'umur_pengguna' => $this->umur_pengguna,
        ];
    }
}
