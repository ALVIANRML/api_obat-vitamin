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
    public function obatvitamin()
    {
        return $this->hasMany(obatvitamin::class, 'obatvitamin_id');
    }

    public function gejala()
    {
        return $this->hasMany(gejala::class, 'gejala_id');
    }
}
