<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Makanan;

class MakananSeeder extends Seeder
{
    // Untuk membuat list-list data makanan tanpa harus buat manual
    public function run()
    {
        // Makanan
        Makanan::create(
            // Data 1
            [
                'gambar_makanan' => 'https://truffle-assets.imgix.net/a8cbdec4-s14-333-sate-ayam-l-id.png',
                'nama_makanan' => 'Sate Ayam',
                'deskripsi_makanan' => 'Sate ayam adalah makanan khas Indonesia. Sate Ayam dibuat dari daging ayam. Pada umumnya sate ayam dimasak dengan cara dipanggang dengan menggunakan arang dan disajikan dengan pilihan bumbu kacang atau bumbu kecap. Sate ini biasanya disajikan bersama dengan lontong atau nasi.',
                'toko_makanan' => 'Bu Siti',
                'harga_makanan' => '15000',
            ],
        );

        Makanan::create(
            // Data 2
            [
                'gambar_makanan' => 'https://awsimages.detik.net.id/community/media/visual/2021/09/18/ilustrasi-ayam-goreng_43.jpeg?w=1200',
                'nama_makanan' => 'Ayam Goreng',
                'deskripsi_makanan' => 'Ayam goreng adalah hidangan Indonesia yang merupakan ayam yang digoreng dalam minyak goreng. Dalam dunia internasional, istilah ayam goreng merujuk kepada cara Indonesia dalam memasak ayam yang digoreng. Kebanyakan ayam goreng khas Nusantara tidak dilapisi tepung, dan memiliki bumbu yang lebih kaya. ',
                'toko_makanan' => 'Bu Siti',
                'harga_makanan' => '15000',
            ],
        );

        Makanan::create(
            // Data 3
            [
                'gambar_makanan' => 'https://blue.kumparan.com/image/upload/c_lpad,b_white,f_jpg,h_900,q_auto,w_1200/g_south,l_og_user_zprw89/co_rgb:ffffff,g_south_west,l_text:Heebo_20_bold:Konten%20dari%20Pengguna%0DResep%20Masakan,x_140,y_26/f2btmxezynqjw8cowz4n.jpg',
                'nama_makanan' => 'Bakso',
                'deskripsi_makanan' => 'Bakso atau baso adalah jenis bola daging yang lazim ditemukan pada masakan Indonesia. Bakso umumnya dibuat dari campuran daging sapi giling dan tepung tapioka, tetapi ada juga bakso yang terbuat dari daging ayam, ikan, atau udang bahkan daging kerbau.',
                'toko_makanan' => 'Bu Siti',
                'harga_makanan' => '14000',
            ],
        );

        Makanan::create(
            // Data 4
            [
                'gambar_makanan' => 'https://cdn0-production-images-kly.akamaized.net/Ejdjvy6W3XMjFrDt5d2vKMySc88=/0x23:999x586/1200x675/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3300676/original/033485800_1605760301-shutterstock_1046157586.jpg',
                'nama_makanan' => 'Mie Ayam',
                'deskripsi_makanan' => 'Mie Ayam atau Mi Ayam adalah hidangan khas Indonesia yang terbuat dari mie gandum yang dibumbui dengan daging ayam yang biasanya dipotong dadu. Hidangan ini banyak terpengaruh dengan teknik penyajian kuliner yang digunakan dalam hidangan Tionghoa.',
                'toko_makanan' => 'Bu Siti',
                'harga_makanan' => '15000',
            ],
        );

        Makanan::create(
            // Data 5
            [
                'gambar_makanan' => 'https://www.langsungenak.com/wp-content/uploads/2022/03/Cara-Baru-Membuat-Ayam-Bakar-Bumbu-Kacang-Di-Godok-Dalam-Bumbu-Kacang-by-Momandson-Pudding.jpg',
                'nama_makanan' => 'Ayam Bakar',
                'deskripsi_makanan' => 'Ayam bakar adalah sebuah hidangan Asia Tenggara Maritim, terutama hidangan Indonesia atau Malaysia, dari ayam yang dipanggang di atas arang.',
                'toko_makanan' => 'Pak Budi',
                'harga_makanan' => '12000',
            ],
        );

        Makanan::create(
            // Data 6
            [
                'gambar_makanan' => 'https://img.kurio.network/OpH6XcpyRpN0qV_bjh4Xp8sKOx0=/1200x900/filters:quality(80)/https://kurio-img.kurioapps.com/20/11/21/b2aecfb2-fefd-415f-9424-2485a95d41ef.png',
                'nama_makanan' => 'Pecel Lele',
                'deskripsi_makanan' => 'Pecel lele atau pecek lele di Indonesia adalah nama sebuah makanan khas Jawa yang terdiri dari ikan lele dan sambal tomat. Biasanya yang dimaksud adalah ikan lele yang digoreng kering dengan minyak lalu disajikan dengan sambal tomat dan lalapan. Lalapan biasa terdiri dari kemangi, kubis, mentimun, dan kacang panjang.',
                'toko_makanan' => 'Pak Budi',
                'harga_makanan' => '25000',
            ],
        );

        Makanan::create(
            // Data 7
            [
                'gambar_makanan' => 'https://www.topwisata.info/wp-content/uploads/2022/03/Cumi-Goreng-Tepung-1.jpg',
                'nama_makanan' => 'Cumi Goreng Tepung',
                'deskripsi_makanan' => 'Calamari atau disebut juga cumi-cumi goreng tepung merupakan camilan khas Yunani yang populer di Indonesia. Cumi-cumi yang digunakan untuk membuat calamari berukuran kecil atau sedang, sehingga ketika dipotong bulat hasilnya tidak kebesaran. Kamu dapat menggunakan tepung terigu yang dicampur dengan bumbu atau langsung tepung bumbu serbaguna.',
                'toko_makanan' => 'Pak Budi',
                'harga_makanan' => '25000',
            ],
        );

        Makanan::create(
            // Data 8
            [
                'gambar_makanan' => 'https://img-global.cpcdn.com/recipes/b4984ff348952b7f/1200x630cq70/photo.jpg',
                'nama_makanan' => 'Lobster',
                'deskripsi_makanan' => 'Lobster merupakan salah satu hewan laut yang sangat enak untuk di makan karena halal juga lobster menjadi salah satu makanan yang mahal dan juga enak, kami menyediakan lobster bakat, goreng, dan juga segala jenis saus lobster yang tersedia.',
                'toko_makanan' => 'Pak Budi',
                'harga_makanan' => '50000',
            ],
        );

        Makanan::create(
            // Data 9
            [
                'gambar_makanan' => 'https://www.masakapahariini.com/wp-content/uploads/2018/05/udang_goreng_mentega-compress2.jpg',
                'nama_makanan' => 'Udang',
                'deskripsi_makanan' => 'Udang yang kami jual dapat di pesan dengan beberapa jenis cara masak dan bumbum masakkan yaitu goreng, bakar, atau rebus sedangkan bumbunya yaitu asam manis, lada hitam, goreng mentega dan masih banyak lagi silakan kalian dapat memesannya dibawah ini.',
                'toko_makanan' => 'Pak Budi',
                'harga_makanan' => '35000',
            ],
        );

        Makanan::create(
            // Data 10
            [
                'gambar_makanan' => 'https://img.okezone.com/content/2019/12/26/298/2146375/resep-seafood-spesial-kepiting-lada-hitam-dan-sate-cumi-bakar-Y9a8VUQSQc.jpg',
                'nama_makanan' => 'Kepiting',
                'deskripsi_makanan' => 'Kami menyediakan beragam jenis kepiting dan juga memiliki banyak bumbu yang dapat di masak, kami menerima beragam jenis masakan kepiting goreng, bakar atau pun rebus, kepiting yang kami jual juga hanyalah kepiting dengan kualitas tertinggi.',
                'toko_makanan' => 'Pak Budi',
                'harga_makanan' => '36000',
            ],
        );

        Makanan::create(
            // Data 11
            [
                'gambar_makanan' => 'https://img.inews.co.id/media/822/files/inews_new/2018/11/26/mujaer1.jpg',
                'nama_makanan' => 'Mujair',
                'deskripsi_makanan' => 'Daging ikan mujair sangat enak, nggak kalah dengan ikan gurame. Rasa manis ditambah sensasi aroma bakaran bumbu dan kecap yang harum memberikan kenikmatan tersendiri. Selain dicampur ke dalam bumbu, kecap juga dapat dijadikan sebagai sambal yang ditambah irisan cabai beserta lalapannya.',
                'toko_makanan' => 'Pak Budi',
                'harga_makanan' => '20000',
            ],
        );

        Makanan::create(
            // Data 12
            [
                'gambar_makanan' => 'https://yoona.id/wp-content/uploads/2022/10/kalori-tahu-goreng-1.jpg',
                'nama_makanan' => 'Tahu',
                'deskripsi_makanan' => 'Tahu adalah makanan yang dibuat dari endapan perasan biji kedelai yang mengalami koagulasi. Tahu berasal dari Tiongkok, seperti halnya kecap, tauco, bakpau, dan bakso. Nama "tahu" merupakan serapan dari bahasa Hokkian, yang secara harfiah berarti "kedelai terfermentasi".',
                'toko_makanan' => 'Pak Budi',
                'harga_makanan' => '20000',
            ]
        );
    }
}