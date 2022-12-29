@extends('css.userPageCard')


<div class="navbar justify-between text-center">
    <a class="ultimasea" href="{{ url('/') }}">UtimaSea</a>
    <a class="login" href="{{ url('login') }}">Login</a>
</div>


<div class="gambar">
    <div class="text-center">
        <p>Selamat Datang Di Website UltimaSea</p>
    </div>
</div>

<div class="d-flex flex-sm-row flex-column justify-content-between mt-4 ms-5 me-5">
    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="/login"><i class="fa-solid fa-utensils"></i></a>
        <p class="text-center">Makanan</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="/login"><i class="fa-solid fa-bottle-water"></i></a>
        <p class="text-center">Minuman</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="/login"><i class="fa-solid fa-credit-card"></i></a>
        <p class="text-center">Pembelian</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="/login"><i class="fa-solid fa-book"></i></a>
        <p class="text-center">Fasilitas</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconMakanan rounded-circle p-3 m-auto" href="/login"><i class="fa-solid fa-ban"></i></a>
        <p class="text-center">Peraturan</p>
    </div>
</div>
