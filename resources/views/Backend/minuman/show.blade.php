@extends('adminlte::page')
@extends('css.card')
@extends('css.gambar')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Show Minuman</p>
    </div>
    <div class="d-flex flex-row gap-4">
        <div>
            <div class="my_card d-flex flex-column">
                <img class="show" src="{{ $minuman->gambar_minuman }}">
                <label>{{ $minuman->nama_minuman }}</label>
                <label>{{ $minuman->deskripsi_minuman }}</label>
                <label>Toko {{ $minuman->toko_minuman }}</label>
                <label>RP {{ $minuman->harga_minuman }}</label>
                <div class="d-flex flex-row justify-content-between">
                    <a class="btn btn-primary" href="{{ url('minuman') }}">Kembali</a>
                </div>
            </div>
        </div>
        <div class="my_card">
            <p class="text-center" style="color: #007BFF; font-size: 24px;">Pesan dari Ultimasea</p>
            <p style="line-height: 1.8">Untuk petugas yang telah bertugas, kami ucapkan terimakasih sebanyak banyaknya
                karna
                telah bekerja dengan keras, kami dari petinggi grub ultimasea mengucapkan terimakasih ke seluruh
                karyawan
                yang telah bertugas.
            </p>
        </div>
    </div>
@endsection
