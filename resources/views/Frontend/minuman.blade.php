@extends('css.globalExtension')
@extends('css.minumanImg')
@extends('Frontend.footer')


<div class="gambarMinuman">
    <p>Beragam Minuman Yang Di Sediakan Oleh UltimaSea</p>
</div>

<div class="d-flex flex-wrap justify-content-center mt-4 gap-5">
    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/"><i class="fa-solid fa-house"></i></a>
        <p class="text-center">Home</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/home/makanan"><i class="fa-solid fa-utensils"></i></a>
        <p class="text-center">Makanan</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/home/minuman"><i class="fa-solid fa-mug-hot"></i></a>
        <p class="text-center">Minuman</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/home/pembelian"><i
                class="fa-solid fa-credit-card"></i></a>
        <p class="text-center">Pembelian</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/home/fasilitas"><i class="fa-solid fa-book"></i></a>
        <p class="text-center">Fasilitas</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="/home/peraturan"><i class="fa-solid fa-ban"></i></a>
        <p class="text-center">Peraturan</p>
    </div>

    <div class="d-flex flex-column text-center">
        <a class="iconFitur rounded-circle p-3 m-auto" href="login"><i class="fa-solid fa-right-to-bracket"></i></a>
        <p class="text-center">Login</p>
    </div>
</div>

<div class="judul mx-auto w-50 rounded-5 mt-5 mb-5 ">
    <p class="text-center text-white">Halaman Minuman</p>
</div>

<div class="mb-3 d-flex flex-fill flex-wrap justify-content-center gap-4">
    @foreach ($minuman as $item)
        <div class="cardMinuman p-4 mx-auto">
            <div class="card-body">
                <img class="w-100 h-100" src="{{ $item->gambar_minuman }}">
                <p class="fs-4 fw-bold">{{ $item->nama_minuman }}</p>
                <p>{{ $item->deskripsi_minuman }}</p>
                <p class="fw-bold">RP {{ $item->harga_minuman }}</p>
                <div class="tombol text-center p-2 rounded-3">
                    <a href="{{ route('minuman.showMinuman', $item->id) }}">Selengkapnya</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
