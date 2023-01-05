<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peraturan;

class PeraturanSeeder extends Seeder
{
    // Untuk membuat list-list data peraturan tanpa harus buat manual
    public function run()
    {
        // Peraturan
        Peraturan::create(
            // Data 1
            [
                'nama_peraturan' => 'Baca Simbol-Simbol Darurat'
            ]
        );

        Peraturan::create(
            // Data 2
            [
                'nama_peraturan' => 'Mengenakan Pakaian Renang'
            ]
        );

        Peraturan::create(
            // Data 3
            [
                'nama_peraturan' => 'Simpan Barang Berharga'
            ]
        );

        Peraturan::create(
            // Data 4
            [
                'nama_peraturan' => 'Bilas Sesuai Tempatnya'
            ]
        );
        Peraturan::create(
            // Data 5
            [
                'nama_peraturan' => 'Jangan Mengunyah Makanan Saat Berenang'
            ]
        );

        Peraturan::create(
            // Data 6
            [
                'nama_peraturan' => 'Jangan Berlari Di Sekitar Kolam'
            ]
        );

        Peraturan::create(
            // Data 7
            [
                'nama_peraturan' => 'Tidak Meludah Sembarangan'
            ]
        );

        Peraturan::create(
            // Data 8
            [
                'nama_peraturan' => 'Dilarang Bercanda Yang Membahayakan'
            ]
        );

        Peraturan::create(
            // Data 9
            [
                'nama_peraturan' => 'Dilarang Manjat Dinding Licin'
            ]
        );

        Peraturan::create(
            // Data 10
            [
                'nama_peraturan' => 'Tidak Membuang Sampah Sembarangan'
            ]
        );

        Peraturan::create(
            // Data 11
            [
                'nama_peraturan' => 'Perhatikan Kedalaman Kolam'
            ]
        );

        Peraturan::create(
            // Data 12
            [
                'nama_peraturan' => 'Hindari Buang Air Di Kolam Renang'
            ]
        );
    }
}