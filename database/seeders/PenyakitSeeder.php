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
        DB::table('penyakits')->insert([

            [
                'id'        =>'2e4e82f4-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P01',
                'nama'      =>'Bronkitis',
                'gejala'    =>' Demam, Batuk, Hidung tersumbat, Badan lemas, Nyeri dada atau sesak, Suara nafas kasar, Batuk dahak kental atau berdarah, Nyeri bahu dan punggung bersin, batuk berdahak kental atau berdarah, suara serak, pembengkakan kelenjar getah bening, kulit menebal dan kaku.  ',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e5694-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P02',
                'nama'      =>'Sinusitis',
                'gejala'    =>'Demam, Batuk, Hidung tersumbat, Sakit kepala, Nyeri dada atau sesak, Bersin, Frekuensi nafas cepat, Suara serak, Susah tidur, Berkurangnya kemampuan penciuman, Nyeri wajah, Bau mulut, Sakit gigi, Nyeri telinga',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e5c3e-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P03',
                'nama'      =>'Bronkiolitis',
                'gejala'    =>'Demam, Batuk, Badan lemas, Nyeri dada atau sesak, Frekuensi nafas cepat, Suara nafas kasar, Kehilangan nafsu makan, Susah tidur, Dehidrasi',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e5d7e-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P04',
                'nama'      =>'Pneumonia',
                'gejala'    =>' Demam, Batuk, Sakit kepala, Nyeri dada atau sesak, Frekuensi nafas cepat, Kehilangan nafsu makan, Batuk dahak kental atau berdarah, Diare',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e606c-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P05',
                'nama'      =>'Faringitis',
                'gejala'    =>'Demam, Batuk, Sakit kepala, Sakit tenggorokan, Susah menelan, Badan lemas, Bersin, Kehilangan nafsu makan, Suara serak',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e617a-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P06',
                'nama'      =>'Epiglotitis',
                'gejala'    =>'Demam, Sakit kepala, Sakit tenggorokan, Susah menelan, Frekuensi nafas cepat, Suara serak, Gelisah',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e6512-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P07',
                'nama'      =>'Pleuritis',
                'gejala'    =>'Demam, Batuk, Nyeri dada atau sesak, Frekuensi nafas cepat, Nyeri otot sendi, Berkeringat, Batuk dahak kental atau berdarah, Nyeri bahu dan punggung',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e665c-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P08',
                'nama'      =>'Meningitis',
                'gejala'    =>'Demam, Sakit kepala, Leher kaku, Mual Muntah, Sensitive terhadap cahaya, Nyeri, Ruam kulit, Linglung',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e6918-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P09',
                'nama'      =>'Cacar',
                'gejala'    =>'Demam, Sakit kepala, Kehilangan nafsu makan, Ruam kulit, Badan lemas',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e6a44-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P10',
                'nama'      =>'Hiv/AIDS',
                'gejala'    =>' Demam, Ruam kulit, Mual Muntah, Nyeri otot sendi, Berat badan turun, Diare, Sakit kepala, Berkeringat, Nyeri dada atau sesak, Pembengkakan kelenjar getah bening',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e6bc0-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P11',
                'nama'      =>'Tetanus',
                'gejala'    =>'Demam, Nyeri wajah, Sulit menelan, Kejang, Nyeri dada atau sesak',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e6d5a-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P12',
                'nama'      =>'Rubella',
                'gejala'    =>' Demam, Batuk, Flu, Sakit kepala, Sakit tenggorokan, Nyeri otot sendi, Pembengkakan kelenjar getah bening, Mata merah',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e714c-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P13',
                'nama'      =>'Campak',
                'gejala'    =>'Flu, Demam, Nyeri, Kehilangan nafsu makan, Mual Muntah, Ruam kulit',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e73e0-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P14',
                'nama'      =>'Diare',
                'gejala'    =>'BAB encer, Nyeri perut, Demam, Kembung, Feses berdarah',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e7264-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P15',
                'nama'      =>'Tifus',
                'gejala'    =>'Demam, Diare, Kehilangan nafsu makan, Ruam kulit, Nyeri otot sendi',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e7598-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P16',
                'nama'      =>'DBD',
                'gejala'    =>'Demam, Badan panas dingin, Feses pucat, Mual Muntah, Ruam kulit',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e78f4-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P17',
                'nama'      =>'Hepatitis',
                'gejala'    =>'Sakit kepala, Mata dan kulit kekuningan, Mual Muntah, Sakit tenggorokan, Diare, Kehilangan nafsu makan, Nyeri perut',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e7a3e-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'p18',
                'nama'      =>'Malaria',
                'gejala'    =>'Demam, Sakit kepala, Nyeri bahu dan punggung, Badan lemas, Feses berdarah, Diare, Anemia',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e7c6e-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P19',
                'nama'      =>'Kusta',
                'gejala'    =>'Ruam kulit, Pembesaran saraf tepi, Berat badan turun, Nyeri otot sendi, Kulit menebal dan kaku, Mati rasa',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e7dea-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P20',
                'nama'      =>'TBC',
                'gejala'    =>'Demam, Batuk >2 minggu, Nyeri dada atau sesak, Batuk dahak kental atau berdarah, Berkeringat, Berat badan turun, Kehilangan nafsu makan',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],
            [
                'id'        =>'2e4e7fd4-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P21',
                'nama'      =>'Difteri',
                'gejala'    =>'Flu, Demam, Lapisan abu di tenggorokan, Sakit tenggorokan, Nyeri dada atau sesak, Hidung tersumbat, Pembengkakan kelenjar getah bening, Tanda shock',
                'penyebab'  =>'',
                'pengobatan'=>''
            ],


        ]);
    }
}
