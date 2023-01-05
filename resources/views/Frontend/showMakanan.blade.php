@extends('css.globalExtension')
@extends('css.showMakanan')

<div class="mb-3 d-flex flex-sm-row flex-column gap-4 mt-3 ms-4 me-4">
    <div class="cardShowMakanan p-4">
        <div class="card-body">
            <div class="d-flex flex-sm-row flex-column">
                <img class="h-100 w-100 img-fluid" src="{{ $makanan->gambar_makanan }}">

            </div>
        </div>
    </div>
    <div class="cardShowMakanan p-4 align-self-baseline">
        <div class="d-flex flex-column flex-column">
            <div class="d-flex flex-column ms-3">
                <p><span class="fs-4 fw-bold">{{ $makanan->nama_makanan }}</span><br> {{ $makanan->deskripsi_makanan }}
                </p>
                <p><span class="fw-bold">Tempat</span><br> Warung {{ $makanan->toko_makanan }}</p>
                <p><span class="fw-bold">Harga</span><br> Rp {{ $makanan->harga_makanan }}</p>
                <a class="btn btn-primary" href="{{ url('/home/makanan') }}">Kembali</a>
            </div>
        </div>
    </div>
</div>
