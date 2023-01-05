<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fasilitas;

class FasilitasSeeder extends Seeder
{
    // Untuk membuat list-list data fasilitas tanpa harus buat manual
    public function run()
    {
        // Fasilitas
        Fasilitas::create(
            // Data 1
            [
                'gambar_fasilitas' => 'https://wonderlandwaterpark.com/wp-content/uploads/2020/01/gazebo2.jpg',
                'nama_fasilitas' => 'Gazebo',
                'status_fasilitas' => 'Aktif',
                'deskripsi_fasilitas' => 'gazebo dan cabana adalah salah satu tempat untuk bekumpul dan dapat di sewa oleh semua pengunjung ultimasea.
                ',
            ]
        );

        Fasilitas::create(
            // Data 2
            [
                'gambar_fasilitas' => 'https://wonderlandwaterpark.com/wp-content/uploads/2020/01/HIB_1770-scaled.jpg',
                'nama_fasilitas' => 'FOODCOURT',
                'status_fasilitas' => 'Aktif',
                'deskripsi_fasilitas' => 'Tidak usah risau dengan makanan dan minuman, karena di ultimasea sudah ada banyak jajanan dan makanan di area foodcourt.
                karena banyak tenant jajanan dan makanan di wonderland
                ',
            ]
        );

        Fasilitas::create(
            // Data 3
            [
                'gambar_fasilitas' => 'https://wonderlandwaterpark.com/wp-content/uploads/2020/01/HIB_7207.jpg',
                'nama_fasilitas' => 'FLYING FOX',
                'status_fasilitas' => 'Tidak Aktif',
                'deskripsi_fasilitas' => 'Nikmati wahana fliyng fox dan jaring laba-laba. sebagai ajang rekreasi sekaligus Menumbuhkan kepercayaan diri anak serta melatih motorik anak',
            ]
        );

        Fasilitas::create(
            // Data 4
            [
                'gambar_fasilitas' => 'https://wonderlandwaterpark.com/wp-content/uploads/2020/01/HIB_1764-scaled.jpg',
                'nama_fasilitas' => 'P3K - LACTATION ROOM',
                'status_fasilitas' => 'Aktif',
                'deskripsi_fasilitas' => 'Jangan khawatir, di ultimasea ada fasilitas P3K serta Lactation Room untuk ibu menyusui.',
            ]
        );

        Fasilitas::create(
            // Data 5
            [
                'gambar_fasilitas' => 'https://wonderlandwaterpark.com/wp-content/uploads/2020/01/HIB_7825.jpg',
                'nama_fasilitas' => 'SEWA BAN',
                'status_fasilitas' => 'Aktif',
                'deskripsi_fasilitas' => 'Tersedia penyewaan ban di ultimasea. ada 2 tipe ban single dan double.
                Untuk pelajar terdapat harga pelajar dengan menunjukan kartu pelajar.',
            ]
        );

        Fasilitas::create(
            // Data 6
            [
                'gambar_fasilitas' => 'https://wonderlandwaterpark.com/wp-content/uploads/2020/02/HIB_2605.jpg',
                'nama_fasilitas' => 'SPOT SELFIE',
                'status_fasilitas' => 'Aktif',
                'deskripsi_fasilitas' => 'Ultimasea Adventure Waterpark menyediakan wahana Spot Foto Selfie,
                buat kamu yang doyan selfie dan update ke instagram cocok nih..',
            ]
        );

        Fasilitas::create(
            // Data 7
            [
                'gambar_fasilitas' => 'https://wonderlandwaterpark.com/wp-content/uploads/2020/01/HIB_8362-scaled.jpg',
                'nama_fasilitas' => 'OUTBOND',
                'status_fasilitas' => 'Tidak Aktif',
                'deskripsi_fasilitas' => 'Nikmati wahana outbond, sebagai ajang rekreasi sekaligus Menumbuhkan kepercayaan diri anak serta melatih motorik anak.',
            ]
        );

        Fasilitas::create(
            // Data 8
            [
                'gambar_fasilitas' => 'https://wonderlandwaterpark.com/wp-content/uploads/2020/03/DSC_1142.jpg',
                'nama_fasilitas' => 'WEDDING POOL PARTY & INDOOR',
                'status_fasilitas' => 'Tidak Aktif',
                'deskripsi_fasilitas' => 'Wonderland tidak hanya menyediakan fasilitas Rekreasi dan Sport Club tapi juga dapat digunakan untuk acara penting seperti Wedding & Birtday Party',
            ]
        );

        Fasilitas::create(
            // Data 9
            [
                'gambar_fasilitas' => 'https://wonderlandwaterpark.com/wp-content/uploads/2020/03/HIB_2533.jpg',
                'nama_fasilitas' => 'Loker',
                'status_fasilitas' => 'Aktif',
                'deskripsi_fasilitas' => 'ada juga loker khusus untuk menyimpan barang - barang selagi berenang.',
            ]
        );
    }
}