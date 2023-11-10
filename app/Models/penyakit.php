<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyakit extends Model
{
    use HasFactory, HasUuids;

    protected $primarykey = 'penyakit';
    protected $fillable =
    [
        'id_penyakit',
        'nama',
        'penyebab',
        'pengobatan',
];
public function vitality()
    {
        return $this->belongsTo(vitality::class, 'vitality_id');
    }

}
