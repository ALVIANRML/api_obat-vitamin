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

        DB::table('gejala')->insert([
            [
          'id' =>  'g20620f0-7e0f-11ee-b962-0242ac120002',
          'id_gejala'=> 'G01',
           'nama'=> 'flu',
          'created_at' =>  '2023-11-7 10:00:00',
          'updated_at' => '2023-11-7 10:00:00',
            ],
        [
          'id' =>  '8a8168e8-7e11-11ee-b962-0242ac120002',
          'id_gejala'=>'G02',
           'nama'=> 'demam',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00',
        ],
        [
          'id' =>  '8a816bb8-7e11-11ee-b962-0242ac120002',
           'nama'=> 'nyeri',
            'id_gejala'=>'G03',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00',
        ],
        [
          'id' =>  '8a816d02-7e11-11ee-b962-0242ac120002',
           'nama'=> 'nafsu makan berkurang',
            'id_gejala'=>'G04',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00',
        ],
        [

          'id' =>  '8a816e24-7e11-11ee-b962-0242ac120002',
          'id_gejala'=>'G05',
          'nama'=> 'mual atau muntah',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a816f50-7e11-11ee-b962-0242ac120002',
          'id_gejala'=>'G06',
          'nama'=> 'ruam kulit',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00',
        ],
        [
          'id' =>  '8a817216-7e11-11ee-b962-0242ac120002',
          'id_gejala'=>'G07',
          'nama'=> 'badan panas dingin',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a817342-7e11-11ee-b962-0242ac120002',
           'nama'=> 'sakit kepala',
           'id_gejala'=>'G08',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
           [
             'id' =>  '8a81746e-7e11-11ee-b962-0242ac120002',
             'id_gejala'=>'G09',
             'nama'=> 'sensitif terhadap cahaya',
             'created_at' => '2023-11-7 10:00:00',
             'updated_at' =>'2023-11-7 10:00:00'
           ],
             [
               'id' =>  '8a817590-7e11-11ee-b962-0242ac120002',
               'id_gejala'=>'G10',
               'nama'=> 'BAB encer',
               'created_at' => '2023-11-7 10:00:00',
               'updated_at' =>'2023-11-7 10:00:00'
             ],
               [
                 'id' =>  '8a8176a8-7e11-11ee-b962-0242ac120002',
                 'id_gejala'=>'G11',
                 'nama'=> 'nyeri perut',
                 'created_at' => '2023-11-7 10:00:00',
                 'updated_at' =>'2023-11-7 10:00:00'
                ],
                [
                    'id' =>  '8a81787e-7e11-11ee-b962-0242ac120002',
                    'id_gejala'=>'G12',
                    'nama'=> 'kembung',
                    'created_at'=>'2023-11-7 10:00:00',
                    'updated_at'=>  '2023-11-7 10:00:00'
                ],
                [
                    'id' =>  '8a8179aa-7e11-11ee-b962-0242ac120002',
                    'id_gejala'=>'G13',
           'nama'=> 'feses berdarah',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a817dec-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G13',
          'nama'=> 'diare',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00',
        ],
        [
          'id' =>  '8a817fa4-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G14',
          'nama'=> 'linglung',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00',
        ],
        [
          'id' =>  '8a818198-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G15',
          'nama'=> 'nyeri otot sendi',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a8182e2-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G16',
          'nama'=> 'feses pucat',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81856c-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G17',
          'nama'=> 'berat badan turun',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a8186ac-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G18',
          'nama'=> 'sulot menelan',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a8187ba-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G19',
          'nama'=> 'mata merah',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a8188c8-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G20',
          'nama'=> 'kejang',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a818b0c-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G21',
          'nama'=> 'mata dan kulit kekuningan',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a818c24-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G22',
          'nama'=> 'anemia',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a818d3c-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G23',
          'nama'=> 'lapisan abu di tenggorokan',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a818ec2-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G24',
          'nama'=> 'pembesaran saraf tepi',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a8191e2-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G25',
          'nama'=> 'batuk lebih dua minggu',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a8193a4-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G26',
          'nama'=> 'nyeri dada atau sesak',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a819502-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G27',
          'nama'=> 'batuk berdahak kental atau berdarah',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a819610-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G28',
          'nama'=> 'pembengkakan kelenjar getah bening',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a819732-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G29',
          'nama'=> 'mati rasa',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a819840-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G30',
          'nama'=> 'tanda shock',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a8199c6-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G31',
          'nama'=> 'batuk',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a819b6a-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G32',
          'nama'=> 'hidung tersumbat',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a819c82-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G33',
          'nama'=> 'sakit tenggorokan',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81a042-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G34',
          'nama'=> 'susah menelan',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81a182-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G35',
          'nama'=> 'badan lemas',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81a45c-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G36',
          'nama'=> 'bersin',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81a592-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G37',
          'nama'=> 'frekuensi nafas cepat',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81a7d6-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G38',
          'nama'=> 'suara nafas kasar',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81a966-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G39',
          'nama'=> 'suara serak',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81aa88-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G40',
          'nama'=> 'gelisah',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81abdc-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G41',
          'nama'=> 'susah tidur',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81acfe-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G42',
          'nama'=> 'kemampuan penciuman berkurang',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81afb0-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G43',
          'nama'=> 'nyeri wajah',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81b0c8-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G44',
          'nama'=> 'bau mulut',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81b1e0-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G45',
          'nama'=> 'sakit gigi',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81b302-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G46',
          'nama'=> 'berkeringat',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81b532-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G47',
          'nama'=> 'nyeri bahu dan punggung',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81b64a-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G48',
          'nama'=> 'kulit menebal dan kaku',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81b74e-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G49',
          'nama'=> 'nyeri telinga',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81b85c-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G50',
          'nama'=> 'leher kaku',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
        [
          'id' =>  '8a81bac8-7e11-11ee-b962-0242ac120002',
            'id_gejala'=> 'G51',
          'nama'=> 'dehidrasi',
           'created_at' => '2023-11-7 10:00:00',
           'updated_at' =>'2023-11-7 10:00:00'
        ],
    ]);


     }

}
