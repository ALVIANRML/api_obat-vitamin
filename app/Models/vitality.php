<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vitality extends Model
{
    use HasFactory, HasUuids;
    protected $primarykey = 'vitality';
    protected $fillable =
    [
        'obatvitamin_id',
        'penyakit_id',
        'gejala_id'
    ];
    public function obatvitamin()
    {
        return $this->hasmany(obatvitamin::class, 'obatvitamin_id');
    }
    public function penyakit()
    {
        return $this->hasMany(penyakit::class, 'penyakit_id');
    }
    public function gejala()
    {
        return $this->hasMany(gejala::class, 'gejala_id');
    }
}
