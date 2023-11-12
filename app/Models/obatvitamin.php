<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatvitamin extends Model
{
    use HasFactory, HasUuids;
    protected $table   ='obatvitamin';
    protected $fillable     =
    [
        'id_obatvitamin',
        'nama',
        'deskripsi',
        'obat_anak',
        'obat_dewasa',
        'harga',
    ];
    public function vitality()
    {
        return $this->belongsTo(vitality::class, 'vitality_id');
    }

}
