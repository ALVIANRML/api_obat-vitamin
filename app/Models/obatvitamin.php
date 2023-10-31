<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obatvitamin extends Model
{
    use HasFactory, HasUuids;
    protected $primarykey   ='obatvitamin';
    protected $fillable     =
    [
        'nama',
        'deskripsi',
        'umur',
    ];
}
