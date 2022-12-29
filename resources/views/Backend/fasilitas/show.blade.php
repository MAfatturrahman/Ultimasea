@extends('adminlte::page')
@extends('css.card')
@extends('css.gambar')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Show Fasilitas</p>
    </div>
    <div class="d-flex flex-sm-row flex-column gap-4">
        <div>
            <div class="my_card align-self-baseline">
                <div class="d-flex flex-sm-column flex-column">
                    <img class="show" src="{{ $fasilitas->gambar_fasilitas }}">
                    <label>{{ $fasilitas->nama_fasilitas }}</label>
                    <label>{{ $fasilitas->deskripsi_fasilitas }}</label>
                    <label>{{ $fasilitas->status_fasilitas }}</label>
                    <div class="d-flex flex-sm-row flex-column justify-content-between">
                        <a class="btn btn-primary" href="{{ url('fasilitas') }}">Kembali</a>
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
