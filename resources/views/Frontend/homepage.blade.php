@extends('css.userPageCard')
@extends('css.card')

<div class="gambar">
    <div class="text-center">
        <p>Selamat Datang Di Website UltimaSea</p>
    </div>
</div>

<div class="d-flex flex-sm-row flex-column justify-content-between mt-4 ms-5 me-5">
    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="/"><i class="fa-solid fa-house"></i></a>
        <p class="text-center">Home</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="/makanan"><i class="fa-solid fa-utensils"></i></a>
        <p class="text-center">Makanan</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="/minuman"><i class="fa-solid fa-mug-hot"></i></a>
        <p class="text-center">Minuman</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="/pembelian"><i class="fa-solid fa-credit-card"></i></a>
        <p class="text-center">Pembelian</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="/fasilitas"><i class="fa-solid fa-book"></i></a>
        <p class="text-center">Fasilitas</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="/peraturan"><i class="fa-solid fa-ban"></i></a>
        <p class="text-center">Peraturan</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="login"><i class="fa-solid fa-right-to-bracket"></i></a>
        <p class="text-center">Login</p>
    </div>
</div>

<div class="judul mx-auto w-50 rounded-5 mt-5 mb-5 ">
    <p class="text-center text-white">Halaman Utama</p>
</div>

<div class="d-flex flex-sm-row flex-column gap-4 mx-auto" style="width: 95%">
    <div class="my_card mx-auto">
        <div class="container">
            <p class="judulCard text-center">Deskripsi</p>
            <p>Selamat datang wahai pengunjung, tempat ini memiliki beberapa fitur yang dapat kalian jumpai beberapa
                fiturnya yaitu dapat membeli makanan dan minuman dan juga kalian dapat membeli tiketnya di dalam website
                ini juga
                kalian juga dapat memesan pondok yang ada di samping kolam secara perjam setelah jamnya habs maka kalian
                akan di usir secara paksa, jika kalian tidak mau maka mobil kalian akan di celupin,</p>
        </div>
    </div>

    <div class="my_card mx-auto">
        <div class="container">
            <p class="judulCard text-center">Sejarah</p>
            <p>Tempat ini pertama kali di bangun pada tahun 1900, pada awal mulanya tempat ini di jadikan tempat
                pembuangan
                mayat olah penjajah belanda dan di beli oleh seorang investor bernama fukron, pada awalnya fukron ingin
                membuat tempat ini menjadi lapangan futsal tetapi karna adanya peluang yang lebih besar untuk menjual
                batagor, oleh karna itu fukron menjualnya lagi pada orang kedua yang bernama sujidot, sujidot membelinya
                kembali pada tahun 2004 dan sujidot merenofasinya secara besar besaran dan jadi lah ultima sea yang kita
                kenal saat ini</p>
        </div>
    </div>
</div>

@extends('frontend.footer')
