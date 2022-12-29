@extends('adminlte::page')
@extends('css.card')
@extends('css.gambar')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Show Makanan</p>
    </div>

    <div class="d-flex flex-sm-row flex-column gap-4">
        <div>
            <div class="my_card align-self-baseline">
                <div class="d-flex flex-sm-column flex-column gap-2">
                    <img class="show" src="{{ $makanan->gambar_makanan }}">
                    <label>{{ $makanan->nama_makanan }}</label>
                    <label>{{ $makanan->deskripsi_makanan }}</label>
                    <label>Toko {{ $makanan->toko_makanan }}</label>
                    <label>RP {{ $makanan->harga_makanan }}</label>

                    <div class="d-flex flex-sm-row flex-column justify-content-between">
                        <a class="btn btn-primary" href="{{ url('makanan') }}">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="my_card align-self-baseline">
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
