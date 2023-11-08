<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class gejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gejala = [
            ['nama' => 'flu'],
            ['nama' => 'demam'],
            ['nama' => 'nyeri'],
            ['nama' => 'nafsu makan berkurang'],
            ['nama' => 'mual atau muntah'],
            ['nama' => 'ruam kulit'],
            ['nama' => 'badan panas dingin'],
            ['nama' => 'sakit kepala'],
            ['nama' => 'sensitif terhadap cahaya'],
            ['nama' => 'BAB encer'],
            ['nama' => 'nyeri perut'],
            ['nama' => 'kembung'],
            ['nama' => 'feses berdarah'],
            ['nama' => 'diare'],
            ['nama' => 'linglung'],
            ['nama' => 'nyeri otot sendi'],
            ['nama' => 'feses pucat'],
            ['nama' => 'berat badan turun'],
            ['nama' => 'sulot menelan'],
            ['nama' => 'mata merah'],
            ['nama' => 'kejang'],
            ['nama' => 'mata dan kulit kekuningan'],
            ['nama' => 'anemia'],
            ['nama' => 'lapisan abu di tenggorokan'],
            ['nama' => 'pembesaran saraf tepi'],
            ['nama' => 'batuk lebih dua minggu'],
            ['nama' => 'nyeri dada atau sesak'],
            ['nama' => 'batuk berdahak kental atau berdarah'],
            ['nama' => 'pembengkakan kelenjar getah bening'],
            ['nama' => 'mati rasa'],
            ['nama' => 'tanda shock'],
            ['nama' => 'batuk'],
            ['nama' => 'hidung tersumbat'],
            ['nama' => 'sakit tenggorokan'],
            ['nama' => 'susah menelan'],
            ['nama' => 'badan lemas'],
            ['nama' => 'bersin'],
            ['nama' => 'frekuensi nafas cepat'],
            ['nama' => 'suara nafas kasar'],
            ['nama' => 'suara serak'],
            ['nama' => 'gelisah'],
            ['nama' => 'susah tidur'],
            ['nama' => 'kemampuan penciuman berkurang'],
            ['nama' => 'nyeri wajah'],
            ['nama' => 'bau mulut'],
            ['nama' => 'sakit gigi'],
            ['nama' => 'berkeringat'],
            ['nama' => 'nyeri bahu dan punggung'],
            ['nama' => 'kulit menebal dan kaku'],
            ['nama' => 'nyeri telinga'],
            ['nama' => 'leher kaku'],
            ['nama' => 'dehidrasi'],
        ];

        DB::table('gejala')->insert($gejala);
    }
}
