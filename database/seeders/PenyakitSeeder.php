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
                'penyebab'  =>'* Infeksi saluran napas oleh virus, yang paling umum oleh virus influenza A dan
                influenza B, RSV, parainfluenza, rhinovirus, adenovirus maupun coronavirus.
                * Infeksi saluran napas oleh bakteri, yang paling umum oleh Streptococcus
                pneumoniae, Chlamydia pneumoniae, Moraxella catarrhalis, dan Haemophilus
                influenzae.
                * Kebiasaan merokok dan asap rokok, merupakan penyebab yang terpenting
                untuk menimbulkan bronkitis kronik.
                * Paparan terhadap polusi udara di lingkungan dan tempat kerja, seperti asap
                kendaraan, asap pabrik, bahan kimia, asap tembakau dan asam kebakaran
                hutan.',
                'pengobatan'=>'Pengobatan bronkitis adalah dengan mengonsumsi obat batuk berdahak. Pada
                bronkitis yang disebabkan oleh infeksi bakteri, dokter juga akan meresepkan obat
                antibiotik. Penderita bronkitis disarankan untuk banyak minum air putih dan
                beristirahat yang cukup guna membantu proses pemulihan. Dokter juga mungkin akan
                menyarankan fisioterapi dada untuk mengurangi gejala. Bronkitis dapat dicegah
                dengan tidak merokok, selalu mencuci tangan setiap usai beraktivitas, dan selalu
                mengenakan masker untuk menghindari paparan senyawa berbahaya.',
            ],
            [
                'id'        =>'2e4e5694-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P02',
                'nama'      =>'Sinusitis',
                'gejala'    =>'Demam, Batuk, Hidung tersumbat, Sakit kepala, Nyeri dada atau sesak, Bersin, Frekuensi nafas cepat, Suara serak, Susah tidur, Berkurangnya kemampuan penciuman, Nyeri wajah, Bau mulut, Sakit gigi, Nyeri telinga',
                'penyebab'  =>'Sinusitis disebabkan oleh peradangan pada lapisan sinus. Peradangan tersebut
                umumnya terjadi akibat infeksi virus atau alergi. Akibatnya, sinus memproduksi
                banyak lendir yang menyebabkan penyumbatan. Kondisi lain yang dapat
                menyebabkan sinusitis adalah polip hidung, tulang hidung bengkok (deviasi
                septum), cystic fibrosis, dan daya tahan tubuh lemah.',
                'pengobatan'=>'Sebagian besar kasus sinusitis terjadi akibat infeksi virus dan mungkin tidak
                memerlukan pengobatan. Untuk meringankan gejala kondisi ini akibat virus, pengidap
                dapat mengonsumsi obat bebas dan pengobatan rumahan dapat membantu
                meringankan gejalanya. Ada beberapa pilihan pengobatan yang dapat
                direkomendasikan adalah konsumsi obat nyeri, antibiotik, atau operasi sinusitis.',
            ],
            [
                'id'        =>'2e4e5c3e-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P03',
                'nama'      =>'Bronkiolitis',
                'gejala'    =>'Demam, Batuk, Badan lemas, Nyeri dada atau sesak, Frekuensi nafas cepat, Suara nafas kasar, Kehilangan nafsu makan, Susah tidur, Dehidrasi',
                'penyebab'  =>'Bronkiolitis biasanya terjadi apabila virus menginfeksi bronkiolus, yaitu saluran
                (percabangan) udara paling kecil pada paru-paru. Infeksi menyebabkan bronkiolus
                membengkak dan meradang. Lendir juga akan menumpuk pada saluran udara
                tersebut, menyebabkan udara sulit mengalir bebas pada paru-paru.
                Kebanyakan kasus bronkiolitis disebabkan oleh respiratory syncytial virus (RSV).
                RSV adalah virus umum yang menginfeksi hampir setiap anak-anak berusia 2 tahun.
                Bronkiolitis juga dapat disebabkan oleh virus lain, termasuk virus yang menyebabkan
                flu atau pilek.',
                'pengobatan'=>'Pengobatan di rumah untuk mengontrol gejala bronkiolitis biasanya dibutuhkan. Anak
                yang terkena infeksi penyakit ini harus minum dalam jumlah cukup guna menghindari
                dehidrasi. Jika bayi mengalami hidung tersumbat, gunakan suction untuk
                menghilangkan lendir (mukus) dari dalam hidung. Obat demam
                (seperti paracetamol atau ibuprofen) bisa menurunkan demam. Jangan memberikan
                aspirin untuk anak karena risiko mengalami sindrom Reye. Obat batuk dan pilek yang
                dijual bebas tidak disarankan untuk diminum sembarangan. Harap berhati – hati saat
                memberikan obat untuk dikonsumsi anak.',
            ],
            [
                'id'        =>'2e4e5d7e-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P04',
                'nama'      =>'Pneumonia',
                'gejala'    =>' Demam, Batuk, Sakit kepala, Nyeri dada atau sesak, Frekuensi nafas cepat, Kehilangan nafsu makan, Batuk dahak kental atau berdarah, Diare',
                'penyebab'  =>'Pneumonia disebabkan oleh berbagai mikroorganisme. Beberapa di antaranya adalah
                bakteri (S. Penumonia, H, influenza, S. aureus, P. aeruginosa, M. tuberculosis, M.
                kansasii, dan sebagainya), jamur (P. carinii, C. neoformans, H. capsulatum, C.
                immitis, S. fumigatus, dan sebagainya), protozoa, serta virus (CMV dan herpes
                simpleks).
                Selain itu, ada beberapa penyebab langsung yang juga dapat memicu pneumonia,
                seperti:
                * Kebiasaan merokok
                * Jantung kronik
                * Diabetes melitus
                * Kelemahan struktur organ pernapasan
                * Penurunan tingkat kesadaran',
                'pengobatan'=>'Pengobatan pneumonia akan disesuaikan dengan penyebab dan tingkat keparahan
                yang dialami pasien. Pneumonia akibat infeksi bakteri akan ditangani dengan obat
                antibiotik. Dokter juga dapat memberikan obat pneumonia lain untuk meredakan
                gejala batuk, demam, atau nyeri.
                Pneumonia dapat dicegah dengan beberapa cara, di antaranya menjalani vaksinasi,
                menjaga kebersihan diri, misalnya rajin mencuci tangan dan tidak menyentuh hidung
                atau mulut dengan tangan yang belum dicuci, dan menghindari kontak dengan orang
                yang sedang sakit.',
            ],
            [
                'id'        =>'2e4e606c-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P05',
                'nama'      =>'Faringitis',
                'gejala'    =>'Demam, Batuk, Sakit kepala, Sakit tenggorokan, Susah menelan, Badan lemas, Bersin, Kehilangan nafsu makan, Suara serak',
                'penyebab'  =>'Faringitis atau radang tenggorokan paling sering disebabkan oleh infeksi virus. Jenis
                virus penyebab faringitis bisa beragam, tetapi umumnya berasal dari golongan
                virus Influenza, Adenovirus, Rhinovirus, Coronavirus, dan Epstein-Barr.
                Faringitis juga bisa disebabkan oleh penyebaran infeksi dari penyakit lain,
                seperti pilek, flu, pertusis, campak, cacar, dan mononukleosis.
                Pada beberapa kasus, faringitis juga bisa disebabkan oleh infeksi bakteri. Bakteri ini
                biasanya berasal dari golongan Streptococcus A. Meski jarang, bakteri lain
                seperti Neisseria gonorrhoeae, Chlamydia trachomatis, dan Corynebacterium
                diphtheriae, juga bisa menyebabkan faringitis.
                Selain virus dan bakteri, pada kondisi yang jarang terjadi, infeksi jamur Candida juga
                bisa menyebabkan faringitis.',
                'pengobatan'=>'Pada beberapa kondisi, perawatan secara medis sangat diperlukan untuk mengatasi
                faringitis. Faringitis yang disebabkan oleh virus tidak bisa diatasi dengan obat-obatan.
                Obat digunakan untuk menurunkan gejala. Biasanya penggunaan obat kortikosteroid
                selama 1-2 hari untuk menurunkan risiko gejala, seperti keluhan sakit saat menelan,
                makan, atau minum. Penggunaan obat penurunan demam juga disarankan untuk
                mengatasi demam yang dialami. 
                Faringitis bakterial bisa diatasi dengan antibiotik dan berbagai perawatan medis yang
                disarankan oleh dokter. Penting bagi pengidap untuk minum antibiotik sampai habis
                sesuai anjuran dokter untuk mencegah infeksi kambuh kembali. Pengidap juga
                dianjurkan untuk beristirahat di rumah dan minum yang cukup.',
            ],
            [
                'id'        =>'2e4e617a-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P06',
                'nama'      =>'Epiglotitis',
                'gejala'    =>'Demam, Sakit kepala, Sakit tenggorokan, Susah menelan, Frekuensi nafas cepat, Suara serak, Gelisah',
                'penyebab'  =>'Infeksi utama yang menyebabkan epiglotitis adalah bakteri
                Haemophillus influenza tipe B (HiB). Bakteri tersebut secara utama menyerang anak-
                anak. Sedangkan bakteri lainnya seperti Streptococcus group A, Streptococcus group
                B, Streptococcus pneumoniae, dan Staphylococcus aureus juga beresiko menimbulkan
                epiglotitis pada orang dewasa.',
                'pengobatan'=>'Untuk memastikan saluran pernapasan tetap terbuka, salah satu prosedur yang
                dilakukan dokter adalah memasang selang napas (intubasi endotrakeal) lewat mulut.
                Jika epiglotis menutupi batang tenggorokan dan selang napas sulit dipasang, dokter
                akan melakukan trakeostomi, dengan melubangi leher pasien dan memasang alat
                khusus langsung ke batang tenggorok.
                Jika epiglotitis disebabkan oleh infeksi bakteri, dokter THT akan memberikan
                suntik antibiotik. Awalnya, dokter akan memberikan antibiotik yang dapat membunuh
                banyak bakteri. Setelah hasil pemeriksaan keluar, dokter bisa mengganti antibiotik
                sesuai jenis bakteri penyebab epiglotitis.
                Selain antibiotik, dokter juga dapat memberikan obat-obatan lainnya, misalnya obat
                kortikosteroid, untuk mengurangi pembengkakan dan peradangan di dalam
                tenggorokan.',
            ],
            [
                'id'        =>'2e4e6512-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P07',
                'nama'      =>'Pleuritis',
                'gejala'    =>'Demam, Batuk, Nyeri dada atau sesak, Frekuensi nafas cepat, Nyeri otot sendi, Berkeringat, Batuk dahak kental atau berdarah, Nyeri bahu dan punggung',
                'penyebab'  =>'Sebagian besar kasus pleuritis disebabkan oleh infeksi virus yang terjadi di paru-paru
                (bisa juga infeksi bakeri atau jamur). Kondisi inilah yang akan membuat pleura
                meradang, bengkak, dan cairan pleura menjadi lengket. Virus influenza atau bakteri
                TB merupakan contoh yang bisa menyebabkan pleura mengalami infeksi.',
                'pengobatan'=>'Pengobatan pleuritis umumnya tergantung pada penyebabnya. Jika penyebab
                terjadinya pleuritis adalah infeksi bakteri, maka penderita dapat diberikan terapi
                antibiotik. Jika penyebanya adalah penyakit autoimun, dapat diberikan pengobatan
                sesuai penyakit yang mendasarinya. Pada penyakit pleuritis biasanya nyeri dada bisa
                diredakan dengan pemberian obat pereda nyeri golongan antiinflamasi nonsteroid
                (NSAID) seperti aspirin atau ibuprofen.
                Pemberian obat pereda rasa sakit lainnya, seperti kodein atau parasetamol, akan
                dilakukan dokter jika ibuprofen dan aspirin tidak cocok atau tidak berhasil menangani
                rasa sakit. Kodein bisa diberikan dalam bentuk sirup obat batuk untuk meredakan
                batuk. Terkadang dokter juga akan menyarankan untuk rawat inap jika kondisi
                penderita sudah semakin parah',
            ],
            [
                'id'        =>'2e4e665c-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P08',
                'nama'      =>'Meningitis',
                'gejala'    =>'Demam, Sakit kepala, Leher kaku, Mual Muntah, Sensitive terhadap cahaya, Nyeri, Ruam kulit, Linglung',
                'penyebab'  =>'* Meningitis Bakteri
                Beberapa bakteri penyebab radang selaput otak yakni Neisseria meningitidis,
                Haemophilus influenzae, Streptococcus pneumoniae, Listeria monocytogenes,
                Escherichia coli, Klebsiella sp., dan Streptococcus grup B.
                Bakteri ini dapat menyebar melalui pernapasan dan cairan yang dikeluarkan
                dari mulut (droplet). Dalam banyak kasus, bakteri masuk melalui aliran darah

                di dalam sinus, telinga, atau tenggorokan. Bakteri kemudian melakukan
                perjalanan ke otak melalui aliran darah.  
                Orang yang terinfeksi umumnya membutuhkan perawatan medis sesegera
                mungkin karena meningitis bakteri bisa mengancam jiwa atau menyebabkan
                kerusakan otak.  
                * Meningitis Virus
                Meningitis virus merupakan kondisi yang lebih umum dibandingkan daripada
                yang disebabkan oleh bakteri. Peradangan pada selaput otak akibat infeksi
                virus bisa disebabkan oleh virus: influenza, herpes simpleks, varicella-zoster,
                West Nile, limfositik koriomeningitis, dan virus penyebab campak. 
                * Meningitis Jamur
                Jenis jamur yang paling umum menyebabkan meningitis yaitu: Cryptococcus,
                Blastomyces, Histoplasma, dan Coccidioides.
                Seseorang dengan masalah kekebalan tubuh, misalnya pengidap HIV/AIDS,
                lebih berisiko mengalami jenis radang selaput otak ini.
                * Meningitis Parasit
                Tiga parasit utama yang menjadi penyebab radang selaput otak yakni:
                Angiostrongylus cantonensis, Baylisascaris procyonis, dan Gnathostoma
                spinigerum.
                Peradangan selaput otak akibat parasit tidak menular antarmanusia. Parasit ini
                menginfeksi binatang atau bersembunyi di dalam makanan yang kemudian
                dimakan manusia.',
                'pengobatan'=>'Pengobatan untuk radang selaput otak tergantung dari infeksi penyebabnya. Pada
                infeksi virus, dokter akan mengobati gejala dan menunggu infeksi sembuh dengan
                sendirinya. Selain itu, obat antivirus dapat diberikan kepada orang-orang dengan
                herpes meningitis. 
                Sementara pada meningitis bakteri, pasien mungkin memerlukan perawatan di rumah
                sakit agar dapat dipantau oleh dokter dan perawat. Pengobatan meningitis bakteri
                umumnya menggunakan antibiotik yang diberikan melalui suntikan atau infus,
                seperti: ceftriaxone, benzylpenicillin, vancomycin, dan trimethoprim.
                Menurut laporan dalam Internal Medicine Journal, dalam mengatasi pembengkakan
                pada otak, dokter akan memberikan obat kortikosteroid seperti dexamethasone. Jika
                pasien mengalami kejang, dokter juga akan memberikan obat antikolvusan.
                Meningitis jamur perlu diobati dengan antijamur. Sementara itu, pengobatan radang
                selaput otak akibat parasit bertujuan untuk meringankan gejala. Obat yang diberikan
                tergantung pada jenis parasit penyebabnya, tapi penanganan melalui antibiotik bisa
                memberikan hasil efektif.',
            ],
            [
                'id'        =>'2e4e6918-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P09',
                'nama'      =>'Cacar',
                'gejala'    =>'Demam, Sakit kepala, Kehilangan nafsu makan, Ruam kulit, Badan lemas',
                'penyebab'  =>'Penyebab cacar adalah infeksi virus variola yang memperbanyak diri di pembuluh
                darah di dalam lapisan kulit. Penularan penyakit ini dapat berlangsung dengan
                menghirup udara yang telah terkontaminasi virus atau kontak langsung dengan bagian
                kulit yang terdampak. Virus variola bisa dilepaskan ke udara ketika lenting pecah
                menyebabkan luka terbuka di kulit dan virus terkena angin.',
                'pengobatan'=>'Penyakit cacar tidak memiliki pengobatan khusus. Menurut Bloomberg School of
                Public Health, sebelumnya tidak antiviral khusus yang digunakan sebagai obat untuk
                menghentikan infeksi virus.
                Vaksinasi menjadi satu-satunya solusi untuk mencegah kemunculan kembali penyakit
                ini, meskipun vaksin memiliki efek samping yang cukup berisiko. Mendapatkan
                vaksin dalam 3-4 hari setelah kontak dengan virus juga dapat mengurangi keparahan
                penyakit atau bahkan mencegahnya berkembang lebih lanjut.',
            ],
            [
                'id'        =>'2e4e6a44-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P10',
                'nama'      =>'Hiv/AIDS',
                'gejala'    =>'Demam, Ruam kulit, Mual Muntah, Nyeri otot sendi, Berat badan turun, Diare, Sakit kepala, Berkeringat, Nyeri dada atau sesak, Pembengkakan kelenjar getah bening',
                'penyebab'  =>'Virus HIV terbagi menjadi dua tipe utama, yaitu HIV-1 dan HIV-2. Pada 90% kasus,
                infeksi HIV disebabkan oleh HIV-1. Sementara, HIV-2 diketahui hanya menyerang
                sebagian kecil orang, khususnya di Afrika Barat.
                Penularan HIV terjadi saat cairan tubuh penderita (bisa darah, sperma, atau cairan
                vagina), masuk ke dalam tubuh orang lain. Hal ini dapat terjadi melalui berbagai cara
                berikut:
                * Hubungan seks
                Infeksi HIV dapat terjadi melalui hubungan seks baik melalui vagina maupun
                dubur (seks anal). Meski sangat jarang, HIV juga dapat menular melalui seks
                oral. Namun, penularan lewat seks oral hanya terjadi bila terdapat luka terbuka
                di mulut penderita, misalnya akibat gusi mudah berdarah atau sariawan.
                * Penggunaan jarum suntik
                Berbagi penggunaan jarum suntik dengan penderita HIV adalah salah satu cara
                yang dapat membuat seseorang tertular HIV. Penularan bisa terjadi jika
                berbagi pakai jarum suntik ketika menggunakan NAPZA atau saat membuat
                tato.
                * Transfusi darah
                Penularan HIV dapat terjadi saat seseorang menerima donor darah dari
                penderita HIV. Namun, kemungkinan terjadinya penularan ini cukup rendah.
                Hal ini karena sekarang pendonor darah harus melewati skrining HIV dan
                infeksi lainnya terlebih dahulu.',
                'pengobatan'=>'Ada dua tujuan utama dari pengobatan HIV, yaitu mencegah virus merusak sistem
                kekebalan tubuh dan menunda atau menghentikan perkembangan infeksi. Hal ini
                dapat dicapai melalui obat Antiretroviral (ARV) yang digunakan untuk mengobati dan
                mencegah infeksi HIV bekerja dengan cara menghentikan atau mengganggu

                reproduksi virus dalam tubuh. ARV tidak menyembuhkan infeksi HIV melainkan
                untuk mencegah replikasi virus lebih lanjut sehingga dengan demikian dapat
                memperkuat sistem kekebalan tubuh untuk melawan infeksi.',
            ],
            [
                'id'        =>'2e4e6bc0-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P11',
                'nama'      =>'Tetanus',
                'gejala'    =>'Demam, Nyeri wajah, Sulit menelan, Kejang, Nyeri dada atau sesak',
                'penyebab'  =>'Tetanus disebabkan oleh bakteri Clostridium tetani. Spora Clostridium tetani dapat
                bertahan lama di luar tubuh. Mereka paling sering ditemukan di kotoran hewan dan
                tanah yang terkontaminasi, tapi kemungkinan ada hampir di mana saja.
                Ketika Clostridium tetani masuk ke dalam tubuh, mereka berkembang biak dengan
                cepat dan melepaskan tetanospasmin, yaitu suatu neurotoksin. Ketika tetanospasmin
                memasuki aliran darah, bakteri dengan cepat menyebar ke seluruh tubuh, sehingga
                menyebabkan gejala tetanus.
                Tetanospasmin mengganggu sinyal perjalanan dari otak ke saraf di sumsum tulang
                belakang, kemudian ke otot, sehingga menyebabkan kejang otot dan kekakuan.
                Bakteri penyebab tetanus masuk ke dalam tubuh terutama melalui luka potong atau
                tusukan kulit. Itulah pentingnya membersihkan luka secara menyeluruh untuk
                mencegah berkembangnya infeksi agar tidak menjadi tetanus.',
                'pengobatan'=>'Setiap luka harus dibersihkan secara menyeluruh untuk mencegah infeksi. Luka yang
                rentan terhadap tetanus harus segera ditangani oleh tenaga medis profesional. Setiap
                orang yang memiliki luka yang berpotensi menyebabkan tetanus harus mendapatkan
                imunoglobulin tetanus (TIG) sesegera mungkin, bahkan meski ia sudah divaksinasi.
                Imunoglobulin tetanus mengandung antibodi yang membunuh Clostridium
                tetani. Antibodi tersebut disuntikkan ke pembuluh darah dan memberikan
                perlindungan jangka pendek langsung terhadap tetanus.',
            ],
            [
                'id'        =>'2e4e6d5a-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P12',
                'nama'      =>'Rubella',
                'gejala'    =>' Demam, Batuk, Flu, Sakit kepala, Sakit tenggorokan, Nyeri otot sendi, Pembengkakan kelenjar getah bening, Mata merah',
                'penyebab'  =>'Rubella atau campak Jerman disebabkan oleh infeksi virus Rubella yang menular dari
                satu orang ke orang lain. Seseorang bisa terserang rubella ketika menghirup percikan
                air liur yang dikeluarkan penderita saat batuk atau bersin. Di samping itu, seseorang
                juga dapat tertular rubella bila kontak langsung dengan benda yang terkontaminasi air
                liur penderita. Virus Rubella juga dapat menular dari ibu hamil ke janin yang
                dikandungnya melalui aliran darah.',
                'pengobatan'=>'Pengobatan rubella cukup dilakukan di rumah, karena gejalanya tergolong ringan.
                Bila diperlukan, dokter akan meresepkan paracetamol guna meredakan nyeri dan
                demam, serta menyarankan pasien untuk banyak beristirahat di rumah agar virus tidak
                menyebar ke orang lain.
                Pada ibu hamil yang menderita rubella, dokter akan meresepkan hyperimmune
                globulin untuk melawan virus. Meski dapat mengurangi gejala, antivirus ini tidak

                dapat mencegah kemungkinan bayi menderita sindom rubella kongenital, yaitu
                kondisi yang menyebabkan kelainan lahir pada bayi.',
            ],
            [
                'id'        =>'2e4e714c-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P13',
                'nama'      =>'Campak',
                'gejala'    =>'Flu, Demam, Nyeri, Kehilangan nafsu makan, Mual Muntah, Ruam kulit',
                'penyebab'  =>'Campak disebabkan oleh infeksi virus dari famili Paramyxovirus. Virus ini menular
                melalui percikan air liur saat penderitanya bersin, batuk, atau berbicara. Penularan
                virus ini juga dapat terjadi ketika seseorang menyentuh hidung atau mulut setelah
                memegang permukaan benda yang terkena percikan liur.
                Beberapa kondisi yang bisa meningkatkan risiko seseorang terkena campak adalah
                belum menerima vaksin campak atau vaksin MMR, atau tinggal bersama maupun
                merawat seseorang yang terkena campak',
                'pengobatan'=>'Campak dapat sembuh dalam beberapa hari tanpa pengobatan. Namun, untuk
                membantu meredakan gejala, penderita disarankan untuk melakukan upaya-upaya
                berikut:
                * Banyak minum air putih
                * Minum obat pereda demam, seperti paracetamol atau ibuprofen
                * Beristirahat yang cukup
                * Mengonsumsi suplemen vitamin A, sesuai saran dokter',
            ],
            [
                'id'        =>'2e4e73e0-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P14',
                'nama'      =>'Diare',
                'gejala'    =>'BAB encer, Nyeri perut, Demam, Kembung, Feses berdarah',
                'penyebab'  =>'* Bakteri Escherichia coli (E.coli). Jenis bakteri ini bisa menginfeksi perut dan
                menimbulkan gejala berupa buang-buang air besar. Biasanya orang terinfeksi
                bakteri ini dari makanan dan minuman yang terkontaminasi.
                * Virus seperti flu, norovirus, atau rotavirus. Rotavirus adalah penyebab paling
                umum dari diare akut pada anak-anak.
                * Parasit, yang merupakan organisme kecil yang bisa ada dalam makanan atau
                air yang terkontaminasi.
                * Intoleransi atau sensitivitas terhadap makanan, seperti laktosa dan fruktosa.
                * Alergi makanan.
                * Efek samping dari obat-obatan tertentu, seperti antibiotik, obat kanker, dan
                antasida yang mengandung magnesium.
                * Penyakit yang mempengaruhi lambung, usus kecil, atau usus besar, seperti
                penyakit Crohn.
                * Masalah dengan fungsi usus besar, seperti sindrom iritasi usus besar.
                * Penyakit celiac atau penyakit yang menyebabkan tubuh menolak protein
                gluten.',
                'pengobatan'=>'Sebagian besar diare dapat sembuh dengan sendirinya setelah dua sampai tiga hari,
                dan paling sering membutuhkan waktu satu hingga dua minggu. Satu-satunya

                pengobatan diare yang paling diperlukan adalah mencegah dehidrasi, yang dapat
                dilakukan dengan minum cairan pengganti dan campuran elektrolit (Oralit).',
            ],
            [
                'id'        =>'2e4e7264-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P15',
                'nama'      =>'Tifus',
                'gejala'    =>'Demam, Diare, Kehilangan nafsu makan, Ruam kulit, Nyeri otot sendi',
                'penyebab'  =>'Tifus disebabkan oleh bakteri Rickettsia typhi, Rickettsia prowazekii, atau Orientia
                tsutsugamushi. Penyebarannya bisa melalui gigitan kutu dan tungau, serta kotoran
                kutu atau tungau tersebut. Meskipun penyakit ini tidak menular, tifus lebih sering
                terjadi pada orang yang berkunjung ke wilayah di mana banyak terjadi kasus tifus.',
                'pengobatan'=>'Pengobatan tifus adalah dengan pemberian obat antibiotik. Agar hasilnya maksimal,
                obat-obatan tersebut perlu diminum segera setelah keluhan muncul. Oleh karena itu,
                segera ke dokter bila mengalami gejala tifus untuk mendapatkan penanganan yang
                cepat dan tepat',
            ],
            [
                'id'        =>'2e4e7598-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P16',
                'nama'      =>'DBD',
                'gejala'    =>'Demam, Badan panas dingin, Feses pucat, Mual Muntah, Ruam kulit',
                'penyebab'  =>'Demam berdarah atau DBD disebabkan oleh virus Dengue. Seseorang bisa terjangkit
                demam berdarah jika digigit oleh nyamuk Aedes aegypti atau Aedes albopictus yang
                telah terinfeksi virus Dengue terlebih dahulu.',
                'pengobatan'=>'Tidak ada obat khusus yang dapat membunuh virus Dengue. Perawatan pasien demam
                berdarah berfokus untuk mengatasi gejala, menjaga energi pasien, dan meningkatkan
                kekebalan tubuhnya. Dengan demikian, diharapkan virus dapat terbasmi oleh daya
                tahan tubuh pasien.',
            ],
            [
                'id'        =>'2e4e78f4-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P17',
                'nama'      =>'Hepatitis',
                'gejala'    =>'Sakit kepala, Mata dan kulit kekuningan, Mual Muntah, Sakit tenggorokan, Diare, Kehilangan nafsu makan, Nyeri perut',
                'penyebab'  =>'* Hepatitis A
                Hepatitis A disebabkan oleh infeksi virus hepatitis A (HAV). Penularan jenis
                hepatitis ini dapat terjadi melalui makanan atau minuman yang terkontaminasi
                virus hepatitis A.
                * Hepatitis B
                Jenis hepatitis ini disebabkan oleh infeksi virus hepatitis B (HBV). Hepatitis
                B dapat ditularkan melalui hubungan seksual tanpa alat pengaman dan
                transfusi darah. Pada kasus yang jarang terjadi, ibu hamil yang terinfeksi virus
                hepatitis B bisa menularkan virus ini ke janinnya.
                * Hepatitis C
                Hepatitis C disebabkan oleh infeksi virus hepatitis C (HCV).
                Penularan hepatitis C dapat melalui hubungan seksual tanpa kondom atau
                penggunaan jarum suntik yang tidak steril. Virus ini bisa menular dari ibu
                yang terinfeksi hepatitis C ke janinnya.
                * Hepatitis D

                Hepatitis D adalah peradangan hati akibat infeksi virus hepatitis D (HDV).
                Jenis hepatitis ini jarang terjadi, tetapi bisa menimbulkan masalah kesehatan
                yang serius. Seseorang bisa tertular hepatitis D bila memiliki riwayat penyakit
                hepatitis B. Penularan virus ini bisa melalui penggunaan jarum suntik yang
                tidak steril atau transfusi darah.
                * Hepatitis E
                Hepatitis E disebabkan oleh infeksi virus hepatitis E (HEV). Hepatitis E
                ditularkan melalui air atau makanan yang terkontaminasi virus ini. Oleh
                karena itu, hepatitis E mudah menular di lingkungan dengan sanitasi yang
                buruk.',
                'pengobatan'=>'* Obat interferon
                Beberapa jenis hepatitis akibat infeksi virus bisa sembuh dengan sendirinya.
                Namun, pemberian obat-obatan perlu dilakukan untuk menghentikan
                penyebaran virus dan mencegah kerusakan hati lebih lanjut. Jenis obat yang
                diresepkan oleh dokter adalah interferon, yang biasanya diberikan melalui
                suntikan setiap minggu selama 6 bulan.
                * Obat imunosupresan
                Untuk mengatasi hepatitis akibat penyakit autoimun, dokter dapat memberikan
                obat imunosupresan, terutama kortikosteroid, seperti prednisone dan
                budesonide. Selain itu, pasien juga dapat diberikan obat azathioprine,
                mycophenolate, tacrolimus, dan cyclosporin.
                * Obat antivirus
                Pada beberapa kondisi, misalnya pada hepatitis B atau hepatitis C kronis,
                dokter juga bisa memberikan obat antivirus, seperti entecavir, ribavirin, atau
                tenofovir. Obat-obatan tersebut bisa menghambat pertumbuhan dan
                perkembangan virus dengan mekanisme yang berbeda-beda.',
            ],
            [
                'id'        =>'2e4e7a3e-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'p18',
                'nama'      =>'Malaria',
                'gejala'    =>'Demam, Sakit kepala, Nyeri bahu dan punggung, Badan lemas, Feses berdarah, Diare, Anemia',
                'penyebab'  =>'Malaria disebabkan oleh parasit Plasmodium yang disebarkan oleh gigitan
                nyamuk Anopheles betina. Setelah nyamuk tersebut menggigit, parasit masuk ke
                dalam tubuh, kemudian tumbuh dan berkembang biak di hati.
                Selain melalui gigitan nyamuk, penyebaran parasit malaria juga dapat terjadi akibat
                terpapar darah penderita malaria. Sebagai contoh, ibu yang terinfeksi malaria dapat
                menularkan penyakit ini ke janin yang dikandungnya. Kondisi lain yang dapat
                menyebabkan seseorang terpapar malaria adalah menerima transfusi darah, berbagi
                pemakaian jarum suntik, menerima donor organ',
                'pengobatan'=>'Pengobatan malaria dilakukan dengan pemberian obat antimalaria untuk membunuh
                parasit. Jenis dan jangka waktu pemberian obat tergantung pada jenis parasit yang
                menyerang, tingkat keparahan gejala, dan kondisi pasien.

                Untuk menangani malaria yang disebabkan oleh Plasmodium falciparum, organisasi
                kesehatan dunia (WHO) membuat suatu regimen kombinasi obat yang disebut
                dengan artemisin-based combination therapies (ACT). Kombinasi obat tersebut
                adalah Artemether dan lumefantrine, Artesunate dan amodiaquine,
                Dihydroartemisinin dan piperaquine, Artesunate, sulfadoxine, dan pyrimethamine',
            ],
            [
                'id'        =>'2e4e7c6e-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P19',
                'nama'      =>'Kusta',
                'gejala'    =>'Ruam kulit, Pembesaran saraf tepi, Berat badan turun, Nyeri otot sendi, Kulit menebal dan kaku, Mati rasa',
                'penyebab'  =>'Kusta atau lepra disebabkan oleh infeksi bakteri Mycobacterium leprae. Bakteri ini
                dapat menular dari satu orang ke orang lainnya melalui percikan cairan dari saluran
                pernapasan (droplet), yaitu ludah atau dahak, yang keluar saat batuk atau bersin.
                Seseorang dapat tertular kusta jika terkena percikan droplet dari penderitanya secara
                terus-menerus dalam waktu yang lama. Dengan kata lain, bakteri penyebab lepra tidak
                dapat menular kepada orang lain dengan mudah. Selain itu, bakteri ini juga
                membutuhkan waktu lama untuk berkembang biak di dalam tubuh penderita.',
                'pengobatan'=>'Untuk mengatasi penyakit lepra, dokter biasanya akan melakukan terapi obat
                kombinasi atau multi-drug therapy (MDT). Pengobatan ini umumnya dilakukan
                dalam kurung waktu enam bulan hingga 1 – 2 tahun tergantung jenis lepra dan
                keparahannya.
                Dalam kasus tertentu, pembedahan juga bisa dilakukan sebagai proses lanjutan setelah
                pengobatan antibiotik. Pembedahan ini dilakukan untuk membantu memperbaiki saraf
                yang rusak atau bentuk tubuh penderita yang cacat, supaya penderita bisa beraktivitas
                normal seperti sedia kala.',
            ],
            [
                'id'        =>'2e4e7dea-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P20',
                'nama'      =>'TBC',
                'gejala'    =>'Demam, Batuk >2 minggu, Nyeri dada atau sesak, Batuk dahak kental atau berdarah, Berkeringat, Berat badan turun, Kehilangan nafsu makan',
                'penyebab'  =>'Penyebab TBC adalah infeksi bakteri Mycobacterium tuberculosis di paru-paru.
                Penularan tuberkulosis terjadi ketika seseorang menghirup udara yang terkontaminasi
                bakteri tuberkulosis. Bakteri dikeluarkan oleh penderita TBC saat batuk dan bersin
                dalam bentuk droplet alias percikan lendir.
                Tiga tahapan infeksi TBC, yaitu:
                 Infeksi primer
                Infeksi primer terjadi saat menghirup udara yang mengandung bakteri
                penyebab tuberkulosis. Bakteri masuk melalui mulut dan hidung hingga
                mencapai paru-paru, lalu mulai memperbanyak diri.
                 Infeksi laten
                Sistem imun akan melakukan perlawanan ketika bakteri mulai berkembang
                biak. Respons sistem imun yang kuat dapat menghancurkan bakteri atau
                menahan perkembangan infeksinya. Saat imun tubuh mampu menahan
                perkembangbiakan bakteri, M. tuberculosis akan masuk ke dalam status
                dorman, yaitu kondisi di mana bakteri tidur atau tidak aktif menginfeksi.

                 Infeksi aktif
                Jika respons sistem imun lemah terhadap infeksi bakteri tuberkulosis, bakteri
                akan lebih bebas memperbanyak diri dan menyerang sel-sel sehat di paru-
                paru. Apabila bakteri sebelumnya dalam status dorman, respons sistem imun
                yang lemah menyebabkan bakteri bangun dari tidurnya dan kembali aktif
                menginfeksi.',
                'pengobatan'=>'Pengobatan tuberkulosis (TBC) adalah dengan patuh minum obat selama jangka
                waktu yang dianjurkan oleh dokter. Jika pasien berhenti minum obat sebelum waktu
                yang disarankan, bakteri TBC berpotensi kebal terhadap obat yang biasa diberikan.
                Akibatnya, TBC menjadi lebih berbahaya dan akan lebih sulit diobati.',
            ],
            [
                'id'        =>'2e4e7fd4-814f-11ee-b962-0242ac120002',
                'id_penyakit' =>'P21',
                'nama'      =>'Difteri',
                'gejala'    =>'Flu, Demam, Lapisan abu di tenggorokan, Sakit tenggorokan, Nyeri dada atau sesak, Hidung tersumbat, Pembengkakan kelenjar getah bening, Tanda shock',
                'penyebab'  =>'Penyakit difteri disebabkan oleh infeksi bakteri Corynebacterium diphtheriae yang
                dapat menular melalui droplet pernapasan, seperti ketika batuk atau bersin yang
                berasal dari penderita difteri. Infeksi bakteri difteri ini juga dapat ditularkan melalui
                benda-benda yang terkontaminasi air liur penderita, seperti melalui gelas atau sendok
                dan kemudian digunakan oleh orang lain.',
                'pengobatan'=>'Difteri adalah salah satu penyakit yang berpeluang fatal sehingga perlu diobati
                sesegera mungkin dan secara agresif. Pertama-tama, dokter perlu memastikan jalan
                napas tidak terhalang atau tersumbat.
                Dalam beberapa kasus, dokter perlu memasang tabung pernapasan di tenggorokan
                untuk menjaga jalan napas tetap terbuka sampai peradangan pada jalan napas
                berkurang. Setelah itu, dokter akan berfokus untuk membasmi bakteri penyebab
                difteri dengan memberikan perawatan berikut:
                 Antibiotik
                Pemberian antibiotik dapat membantu membunuh bakteri dan membersihkan
                infeksi. Antibiotik juga dapat mencegah penularan dari pengidap difteri ke
                orang lain.
                 Antitoksin
                Dokter juga akan memberikan obat untuk menetralkan racun difteri dalam
                tubuh (antitoksin). Obat ini diberikan melalui suntikan ke pembuluh darah
                atau otot.',
            ],


        ]);
    }
}
