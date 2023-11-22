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
        [
            'id' => '34ca2c9c-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec7174-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       =>'2e4e82f4-814f-11ee-b962-0242ac120002',
        ],
        [ //penyakit nomor 2
            'id' => '34ca2daa-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec72a0-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e5694-814f-11ee-b962-0242ac120002',
        ],
        [
            'id' => '34ca3296-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec74f8-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e5694-814f-11ee-b962-0242ac120002',
        ],
        [//penyakit nomor 3
            'id' => '34ca33ae-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec7624-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e5c3e-814f-11ee-b962-0242ac120002',
        ],
        [
            'id' => '34ca34c6-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec7746-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e5c3e-814f-11ee-b962-0242ac120002',
        ],
        [
            'id' => '34ca39f8-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec7aac-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e5d7e-814f-11ee-b962-0242ac120002',
        ],
        [
            'id' => '34ca3b06-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec7bce-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e5d7e-814f-11ee-b962-0242ac120002',
        ],
        [
            'id' => '34ca3c64-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec7ce6-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e5d7e-814f-11ee-b962-0242ac120002',
        ],
        [
            'id' => '34ca3e8a-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec7ce6-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e606c-814f-11ee-b962-0242ac120002',
        ],
        [//obat ke 6
            'id' => '34ca3fa2-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec7eee-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e617a-814f-11ee-b962-0242ac120002',
        ],
        [//obat ke 6
            'id' => '34ca40a6-886a-11ee-b9d1-0242ac120002',
            'obatvitamin'   =>'b9ec7eee-7f63-11ee-b962-0242ac120002',
            'penyakit_id'       => '2e4e617a-814f-11ee-b962-0242ac120002',
        ],

        ]);
    }
}
