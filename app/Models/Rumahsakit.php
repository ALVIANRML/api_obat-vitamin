<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumahsakit extends Model
{
    use HasFactory,HasUuids;

    protected $table = 'rumahsakit';
    protected $fillable =
    [
        'nama',
        'alamat',
        'kontak',
        'gambar',
        'map',
    ];
}
