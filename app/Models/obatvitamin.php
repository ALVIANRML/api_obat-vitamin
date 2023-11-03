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
        'nama',
        'deskripsi',
        'umur_obat',

    ];
    public function umur()
    {return $this->belongsTo(umur::class, 'umur_id');}
}
