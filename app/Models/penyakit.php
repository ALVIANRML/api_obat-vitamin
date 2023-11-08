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
    ['nama',
    'penyebab',
    'pengobatan',
    'obatvitamin_id',
    'gejala_id',

];
    public function obatvitamin()
    {return $this->belongsTo(obatvitamin::class, 'obatvitamin_id');}
    public function gejala()
    {return $this->belongsTo(gejala::class, 'gejala_id');}
}
