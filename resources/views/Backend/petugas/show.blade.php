@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Show Petugas</p>
    </div>
    <div class="d-flex flex-row gap-4">
        <div class="my_card w-75">
            <form method="POST" action="{{ route('petugas.update', $petugas->id) }}">
                <div class="form-group row">
                    @csrf
                    <label class="col-sm-3 col-form-label mb-3">Nomor Petugas</label>
                    <div class="col-sm-7">
                        <input class="form-control" value="{{ $petugas->nomor_petugas }}" type="text" name="nomor_petugas"
                            placeholder="10010" required readonly>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Nama Petugas</label>
                    <div class="col-sm-7">
                        <input class="form-control" value="{{ $petugas->nama_petugas }}" type="text" name="nama_petugas"
                            placeholder="Nama Petugas" required readonly>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Tugas Petugas</label>
                    <div class="col-sm-7">
                        <input class="form-control" value="{{ $petugas->tugas_petugas }}" type="text"
                            name="tugas_petugas" placeholder="Tugas Petugas" required readonly>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Email Petugas</label>
                    <div class="col-sm-7">
                        <input class="form-control" value="{{ $petugas->email_petugas }}" type="text"
                            name="email_petugas" placeholder="petugas@gmail.com" required readonly>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Nomor HP</label>
                    <div class="col-sm-7">
                        <input class="form-control" value="{{ $petugas->nomor_telpon }}" type="text" name="nomor_telpon"
                            placeholder="0812-5586-6698" required readonly>
                    </div>
                    <label class="col-sm-3 col-form-label mb-5">Tanggal Lahir</label>
                    <div class="col-sm-3">
                        <input class="form-control" value="{{ $petugas->tanggal_lahir }}" type="date"
                            name="tanggal_lahir" placeholder="Tanggal Lahir" required readonly>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <a class="btn btn-primary" href="{{ url('petugas') }}">Kembali</a>
                </div>
            </form>
        </div>
        <div class="my_card w-50">
            <p class="text-center" style="color: #007BFF; font-size: 24px;">Pesan dari Ultimasea</p>
            <p style="line-height: 1.8">Kami selaku petinggi ultimasea mengucapkan terimakasih kepada karyawan yang bernama
                {{ $petugas->nama_petugas }} karna kerja kerasnya, terimakasih karna telah mau bekerja disini
            </p>
        </div>
    </div>
@endsection
