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
                'alamat'    => 'Jalan Jl. Jamin Ginting No.2, Merdeka, Kec. Medan Baru, Kota Medan, Sumatera Utara 20222',
                'kontak'  => '0822-1740-1119',
                'gambar'=>'https://lh3.googleusercontent.com/p/AF1QipMfnjSjeQvbx9BJUHuaqPkDrNc7YkKlgfmrdHg=s1360-w1360-h1020',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Siti%20Hajar%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde458c-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Mitra Medika Premier.',
                'alamat'    => 'Jalan S. Parman No.234a, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20117',
                'kontak'  => '061-4502021',
                'gambar'=>'https://lh3.googleusercontent.com/p/AF1QipMJZ7mzc2HzXDbIPcvvwh4GBVlethr-_peHnc1C=s1360-w1360-h1020',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=Rumah%20Sakit%20MITRA%20MEDIKA%20Premiere.%20&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde446a-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum Pusat H. Adam Malik',
                'alamat'    => 'Jalan Bunga Lau No.17, Kemenangan Tani, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20136',
                'kontak'  => '061-8360143',
                'gambar'=>'https://lh3.googleusercontent.com/p/AF1QipN9dCViBBe7znBOytnvNyH158GuITaGDwlf1M5U=s1360-w1360-h1020',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RSUP%20H.%20Adam%20Malik&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-host/">blooket host</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde3fc4-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'RSU Murni Teguh Methodist Susanna Wesley',
                'alamat'    => 'Jalan Jl. Harmonika Baru Jl. Setia Budi Ps. II, Padang Bulan Selayang II, Kec. Medan Selayang, Kota Medan, Sumatera Utara 20132',
                'kontak'  => '061-8222264 | 0811-6047-013',
                'gambar'=>'https://lh3.googleusercontent.com/p/AF1QipOVw2dIzbWgLlMJB30yU7Vk8QOZqiCspgw6pAk4=s1360-w1360-h1020',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Murni%20Teguh%20Memorial&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde4122-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'RS Advent Medan',
                'alamat'    => 'Jalan Jl. Gatot Subroto No.Km 4, Sei Sikambing D, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20118',
                'kontak'  => '061-4524875',
                'gambar'=>'https://lh3.googleusercontent.com/p/AF1QipMOhCgq5DNLhsor-RZBNmr3Kt6PJyOepEwp9O0=s1360-w1360-h1020',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Advent%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/">blooket</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde3ea2-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum Bina Kasih',
                'alamat'    => 'Jalan  Jend, Jl. Tahi Bonar Simatupang No.148, Sunggal, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20127',
                'kontak'  => '061-8476111',
                'gambar'=>'https://lh3.googleusercontent.com/p/AF1QipOKCMcMOwZlK7h2GwFpX3JzQrYAjnlSlNbq6KWM=s1360-w1360-h1020',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Bina%20Kasih&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde3d94-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum (RSU) Sarah Medan',
                'alamat'    => 'Jalan Baja Raya No.10, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20111',
                'kontak'  => '061-4568383 | 061-452954',
                'gambar'=>'https://lh3.googleusercontent.com/proxy/ZFA_tD4kLqEhJ9UAksW-6kuse12NZI5USKxm9sRcJ_mmUsLW2pwEARx7B2wrIU1JhxidT1XdgTUZ3WgZV74-yQYf_i_dP3C0zLboPRiXZM2ytX01Zk1L57uc7XXFzF1_WU0XaUPwZd0Mq-r3UHPTmvf6GwHar7iJjz7IDA=s1360-w1360-h1020',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Sarah%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/">blooket</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde3c7c-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum Mitra Sejati',
                'alamat'    => 'Jalan Jenderal Besar A.H. Nasution No.7, Pangkalan Masyhur, Kec. Medan Johor, Kota Medan, Sumatera Utara 20219',
                'kontak'  => '061-7875967',
                'gambar'=>'https://lh3.googleusercontent.com/p/AF1QipP6Bu72HLyUcaVQODuUc7KVnaKYRvG9GE1Np69w=s1360-w1360-h1020',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Mitra%20Sejati&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde3b64-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Murni Teguh Memoria',
                'alamat'    => 'Jalan Jawa No.2, Gg. Buntu, Kec. Medan Tim., Kota Medan, Sumatera Utara 20231',
                'kontak'  => '061-80501900',
                'gambar'=>'https://lh3.googleusercontent.com/p/AF1QipPibGmV7Pz6sQHd8AZ-6maBxSzYsKacSYqJ-hQ5=s1360-w1360-h1020',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Murni%20Teguh%20Memorial&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde3a4c-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum Martha Friska Multatuli',
                'alamat'    => 'Jalan Multatuli No.1, A U R, Kec. Medan Maimun, Kota Medan, Sumatera Utara 20212',
                'kontak'  => '061-4149666',
                'gambar'=>'https://lh3.googleusercontent.com/p/AF1QipP9dSbMt0DwS4IHcekvnILcrbuODcS0YiLH1euR=s1360-w1360-h1020',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Martha%20Friska%20Multatuli&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde390c-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Umum Herna',
                'alamat'    => 'Jalan Mojopahit No.118A, Petisah Hulu, Kec. Medan Baru, Kota Medan, Sumatera Utara 20152',
                'kontak'  => '061-4510766',
                'gambar'=>'https://lh3.googleusercontent.com/p/AF1QipNd8wKQJFn2GpexrMaaJYHTGD3VYSvYg31ywyMI=s1600-w600',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Gran%20Theresia%20Herna&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-play/">blooket play</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde33da-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Islam Malahayati',
                'alamat'    => 'Jalan  Pangeran Diponegoro No.2 - 4, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20112',
                'kontak'  => '061-4518766',
                'gambar'=>'https://lh5.googleusercontent.com/p/AF1QipMHxv4s5hmXsGrcz34dKL24a125KGncIBmM58--=w1440-h810-k-no',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Islam%20Malahayati&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde32cc-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'RSU Madani',
                'alamat'    => 'Jalan Arief Rahman Hakim No.168, Sukaramai I, Kec. Medan Area, Kota Medan, Sumatera Utara 20227',
                'kontak'  => '061-7345911',
                'gambar'=>'https://asset-2.tstatic.net/medan/foto/bank/images/RSU-Madani.jpg',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Madani%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org">blooket join</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
            [
                'id'    =>  '8bde31b4-8e86-11ee-b9d1-0242ac120002',
                'nama'  => 'Rumah Sakit Putri Hijau',
                'alamat'    => 'Jalan Putri Hijau No.17, Kesawan, Kec. Medan Bar., Kota Medan, Sumatera Utara 20111',
                'kontak'  => '061-4529684 | 061-4553900',
                'gambar'=>'https://lh3.googleusercontent.com/p/AF1QipOqtxfuLDi3XF0V-OWY_fWuxRZxeLtKd1obd-WE=s1360-w1360-h1020',
                'map' => '<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=RS%20Putri%20Hijau%20Medan&amp;t=k&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 400px; height: 400px;"></iframe><style>.mapouter{position:relative;height:400px;width:400px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:400px;width:400px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>',
            ],
        ]);
    }
}
