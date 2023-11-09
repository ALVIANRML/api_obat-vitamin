<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //  id
    //  id_penyakit
    //  penyebab
    //  PENGOBATAN

    public function run(): void
    {
        DB::table('penyakit')->insert([

            [
                'id' => '3d106e5a-7eda-11ee-b962-0242ac120002',
                'id_gejala'=>'P01',
                ''
            ]

        ]);
    }
}
