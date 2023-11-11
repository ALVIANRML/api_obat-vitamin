<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'gejala';
    protected $fillable =
    [
        'id_gejala',
        'nama',
    ];
    public function vitality()
    {
        return $this->belongsTo(vitality::class, 'vitality_id');
    }
}
