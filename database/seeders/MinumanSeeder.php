<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Minuman;

class MinumanSeeder extends Seeder
{
    // Untuk membuat list-list data minuman tanpa harus buat manual
    public function run()
    {


        // Minuman
        Minuman::create(
            // Data 1
            [
                'gambar_minuman' => 'https://kurio-img.kurioapps.com/20/06/23/d865c91c-48ef-423d-9ae6-78698f0adad1.jpg',
                'nama_minuman' => 'Es Jeruk',
                'deskripsi_minuman' => 'Sari buah jeruk adalah sari buah yang diperoleh dengan memeras atau menekan isi buah jeruk. Diminum di banyak tempat di dunia, sari buah jeruk biasanya menjadi bagian makan pagi atau sarapan. Pengekspor terbesar sari buah jeruk adalah Brasil, diikuti oleh Amerika Serikat, terutama negara bagian Florida.',
                'toko_minuman' => 'Pak Subarjo',
                'harga_minuman' => '7000',
            ],
        );

        Minuman::create(
            // Data 2
            [
                'gambar_minuman' => 'https://asset.kompas.com/crops/JAz8MyQY5st-C2xrci6RD1rdNaw=/0x0:975x650/750x500/data/photo/2020/04/27/5ea69f8562f36.jpg',
                'nama_minuman' => 'Es Teh',
                'deskripsi_minuman' => 'Es teh adalah minuman teh yang disajikan dingin dengan es batu. Biasanya, Es teh seringkali ditambahkan rasa seperti melati, dan buah-buahan seperti lemon, ceri, dan stroberi, atau susu. Es teh adalah minuman yang sering diminum saat siang hari karena suhu udara yang panas.',
                'toko_minuman' => 'Pak Subarjo',
                'harga_minuman' => '5000',
            ],
        );

        Minuman::create(
            // Data 3
            [
                'gambar_minuman' => 'https://static.republika.co.id/uploads/images/inpicture_slide/air-mineral-kemasan-aqua-_180222205334-669.jpg',
                'nama_minuman' => 'AQUA',
                'deskripsi_minuman' => 'AQUA adalah merek air minum dalam kemasan yang diproduksi oleh AQUA Group sejak tahun 1973. Selain di Indonesia, AQUA juga melayani penjualan produk di Malaysia, Singapura dan Brunei. Sebagai pelopor air minum dalam kemasan di Indonesia, AQUA telah menjadi merek generik di kalangan produk air minum dalam kemasan.',
                'toko_minuman' => 'Pak Subarjo',
                'harga_minuman' => '4000',
            ],
        );

        Minuman::create(
            // Data 4
            [
                'gambar_minuman' => 'https://awsimages.detik.net.id/community/media/visual/2021/02/09/ternyata-ini-alasan-kemasan-coca-cola-berwarna-merah_169.jpeg?w=1200',
                'nama_minuman' => 'Coca-cola',
                'deskripsi_minuman' => 'Coca-Cola adalah minuman ringan berkarbonasi yang dijual di toko, restoran dan mesin penjual di lebih dari 200 negara. Minuman ini diproduksi oleh The Coca-Cola Company asal Atlanta, Georgia, dan sering disebut Coke saja.',
                'toko_minuman' => 'Pak Subarjo',
                'harga_minuman' => '7500',
            ],
        );

        Minuman::create(
            // Data 5
            [
                'gambar_minuman' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOey3T5WDTpKSDXPv-Sj-C9aBZi-V5Ig3lPA&usqp=CAU',
                'nama_minuman' => 'Fanta',
                'deskripsi_minuman' => 'Fanta adalah merek Jerman milik Amerika dari minuman ringan berkarbonasi rasa buah yang dibuat oleh Coca-Cola Deutschland di bawah kepemimpinan pengusaha Jerman Max Keith. Ada lebih dari 200 rasa di seluruh dunia.',
                'toko_minuman' => 'Pak Subarjo',
                'harga_minuman' => '7500',
            ],
        );

        Minuman::create(
            // Data 6
            [
                'gambar_minuman' => 'https://cdnwpseller.gramedia.net/wp-content/uploads/2022/07/28212256/manfaat-jus-alpukat-untuk-promil.webp',
                'nama_minuman' => 'Jus Alpukat',
                'deskripsi_minuman' => 'Jus alpukat adalah salah satu olahan yang banyak digemari oleh para penggemar buah yang satu ini. Selain itu, buah yang satu ini juga kerap dijadikan sebagai salad, dikonsumsi sendiri, dan masih banyak lainnya.',
                'toko_minuman' => 'Pak Subarjo',
                'harga_minuman' => '10000',
            ],
        );

        Minuman::create(
            // Data 7
            [
                'gambar_minuman' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4-IGeRvZ04lehXu6aqorYpNb18AW4CAUeaw&usqp=CAU',
                'nama_minuman' => 'Cendol',
                'deskripsi_minuman' => 'Es cendol adalah penganan yang dibuat dari tepung beras dan sebagainya yang dibentuk dengan penyaring, kemudian dicampur dengan air gula dan santan. Cendol merupakan minuman penutup es manis yang mengandung tetesan tepung beras hijau, santan, dan sirup gula aren.',
                'toko_minuman' => 'Bu Tuti',
                'harga_minuman' => '17000',
            ],
        );

        Minuman::create(
            // Data 8
            [
                'gambar_minuman' => 'https://img.okezone.com/content/2022/04/04/298/2573022/mau-yang-segar-saat-buka-puasa-bikin-es-teler-saja-yuk-VOOk2iI7hH.jpg',
                'nama_minuman' => 'Es Teler',
                'deskripsi_minuman' => 'Es teler adalah koktail buah asli Indonesia. Alpukat, kelapa muda, cincau, nangka, dan buah-buahan lainnya disajikan dengan santan, susu kental manis, daun Pandanus amaryllifolius, gula, dan sedikit garam.',
                'toko_minuman' => 'Bu Tuti',
                'harga_minuman' => '17000',
            ],
        );

        Minuman::create(
            // Data 9
            [
                'gambar_minuman' => 'https://awsimages.detik.net.id/community/media/visual/2019/01/14/322aa228-3eda-408d-be52-e77a6834bb02_169.jpeg?w=1200',
                'nama_minuman' => 'Teh Botol',
                'deskripsi_minuman' => 'Teh Botol Sosro adalah merek teh beraroma melati yang dipasarkan oleh PT. Sinar Sosro. Teh Botol Sosro sangat populer di Indonesia dan kini juga dijual di berbagai negara di luar Indonesia. Menurut hasil penelitian majalah SWA, Teh Botol Sosro lebih digemari masyarakat Indonesia daripada Coca-Cola.',
                'toko_minuman' => 'Bu Tuti',
                'harga_minuman' => '7000',
            ],
        );

        Minuman::create(
            // Data 10
            [
                'gambar_minuman' => 'https://mmc.tirto.id/image/2016/11/17/TIRTO-shutterstock_307710767.JPG',
                'nama_minuman' => 'Pepsi',
                'deskripsi_minuman' => 'Pepsi adalah minuman ringan berkarbonasi yang diproduksi oleh PepsiCo. Awalnya dibuat dan dikembangkan pada tahun 1893 oleh Caleb Bradham dan diperkenalkan sebagai Brad`s Drink, namanya diubah menjadi Pepsi-Cola pada tahun 1898, dan kemudian disingkat menjadi Pepsi pada tahun 1961.',
                'toko_minuman' => 'Bu Tuti',
                'harga_minuman' => '7000',
            ],
        );

        Minuman::create(
            // Data 11
            [
                'gambar_minuman' => 'https://awsimages.detik.net.id/community/media/visual/2019/01/14/322aa228-3eda-408d-be52-e77a6834bb02_169.jpeg?w=1200',
                'nama_minuman' => 'Teh Botol Sosro',
                'deskripsi_minuman' => 'Teh Botol Sosro adalah merek teh beraroma melati yang dipasarkan oleh PT. Sinar Sosro. Teh Botol Sosro sangat populer di Indonesia dan kini juga dijual di berbagai negara di luar Indonesia. Menurut hasil penelitian majalah SWA, Teh Botol Sosro lebih digemari masyarakat Indonesia daripada Coca-Cola.',
                'toko_minuman' => 'Bu Tuti',
                'harga_minuman' => '7000',
            ],
        );

        Minuman::create(
            // Data 12
            [
                'gambar_minuman' => 'https://cdn0-production-images-kly.akamaized.net/EXeKMCinM8jT0janyQzALe_iyfU=/1200x675/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2808046/original/016260300_1558065951-shutterstock_1190351209.jpg',
                'nama_minuman' => 'Es Kelapa',
                'deskripsi_minuman' => 'Es kelapa muda atau es degan adalah minuman segar penyejuk dahaga yang terbuat dari daging dan air kelapa yang masih muda. Es kelapa muda merupakan minuman yang berasal dari Indonesia yang banyak digemari oleh orang-orang.',
                'toko_minuman' => 'Bu Tuti',
                'harga_minuman' => '12000',
            ],
        );
    }
}