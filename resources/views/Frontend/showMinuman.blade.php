@extends('css.globalExtension')
@extends('css.showMinuman')

<div class="mb-3 d-flex flex-sm-row flex-column gap-4 mt-3 ms-4 me-4">
    <div class="cardShowMinuman p-4">
        <div class="card-body">
            <div class="d-flex flex-sm-row flex-column">
                <img class="h-100 w-100 img-fluid" src="{{ $minuman->gambar_minuman }}">

            </div>
        </div>
    </div>
    <div class="cardShowMinuman p-4 align-self-baseline">
        <div class="d-flex flex-column flex-column">
            <div class="d-flex flex-column ms-3">
                <p><span class="fs-4 fw-bold">{{ $minuman->nama_minuman }}</span><br> {{ $minuman->deskripsi_minuman }}
                </p>
                <p><span class="fw-bold">Tempat</span><br> Warung {{ $minuman->toko_minuman }}</p>
                <p><span class="fw-bold">Harga</span><br> Rp {{ $minuman->harga_minuman }}</p>
                <a class="btn btn-primary" href="{{ url('/home/minuman') }}">Kembali</a>
            </div>
        </div>
    </div>
</div>
