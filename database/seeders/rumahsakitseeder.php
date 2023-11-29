<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class rumahsakitseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rumahsakit')->insert([
            [
                'id'    =>  '8bde473a-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Siti Hajar',
                'alamat'    => 'Jalan Contoh No. 123',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde458c-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit MITRA MEDIKA Premiere.',
                'alamat'    => 'Jalan Contoh No. 123',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde446a-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum Pusat H. Adam Malik',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde3fc4-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'RSU Murni Teguh Methodist Susanna Wesley',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde4122-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'RS Advent Medan',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde3ea2-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum Bina Kasih',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde3d94-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum (RSU) Sarah Medan',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde3c7c-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum Mitra Sejati',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde3b64-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Murni Teguh Memoria',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde3a4c-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum Martha Friska Multatuli',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde390c-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum Herna',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde33da-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Islam Malahayati',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde32cc-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'RSU Madani',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
            [
                'id'    =>  '8bde31b4-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Putri Hijau',
                'alamat'    => 'Jl.contoh',
                'kontak'  => '123-456789',
                'gambar'=>'gambar/foto_obat/download.jpg',
                'map' => '',
            ],
        ]);
    }
}
