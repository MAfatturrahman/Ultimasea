@extends('css.globalExtension')
@extends('css.fasilitasImg')
@extends('Frontend.footer')


<div class="gambarFasilitas">
    <div class="text-center">
        <p>Fasilitas Apa Saja Yang Dimiliki Oleh UltimaSea?</p>
    </div>
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
    <p class="text-center text-white">Halaman Fasilitas</p>
</div>

<div class="background w-auto h-auto ps-3 pe-3 pt-3 pb-3">
    <div class="d-flex flex-wrap justify-content-center gap-4">
        @foreach ($fasilitas as $item)
            <div class="cardFasilitas p-4 mt-2 mb-4">
                <div class="card-body">
                    <img class="w-100 h-100" src="{{ $item->gambar_fasilitas }}">
                    <p class="fs-3">{{ $item->nama_fasilitas }}</p>
                    <p>{{ $item->deskripsi_fasilitas }}</p>
                    @if ($item->status_fasilitas == 'Aktif')
                        <p class="text-center text-primary fs-5">{{ $item->status_fasilitas }}</p>
                    @else
                        <p class="text-center text-danger fs-5">{{ $item->status_fasilitas }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
