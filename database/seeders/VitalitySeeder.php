<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VitalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vitalities')->insert([

        [//paracetamol
            'id' => 'c6a4f3a0-8454-11ee-b962-0242ac120002',
            'obatvitamin_id'    => 'b9ec6a3a-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e82f4-814f-11ee-b962-0242ac120002',
        ],
        [
            'id' => '34ca2878-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec6f08-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e82f4-814f-11ee-b962-0242ac120002',

        ],
        [
            'id' => '34ca2a94-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec7048-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e82f4-814f-11ee-b962-0242ac120002',
        ],
        ]);
    }
}
