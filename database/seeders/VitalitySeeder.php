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

        [
            'id' => 'c6a4f3a0-8454-11ee-b962-0242ac120002',
            'obatvitamin_id'   => ''
        ]
        ]);
    }
}
