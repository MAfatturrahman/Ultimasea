@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Edit Fasilitas</p>
    </div>
    <div class="d-flex flex-row gap-4">
        <div class="my_card w-75">
            <form method="POST" action="{{ route('fasilitas.update', $fasilitas->id) }}">
                <div class="form-group row">
                    @csrf
                    @method('PUT')
                    <label class="col-sm-3 col-form-label mb-3">Gambar Fasilitas</label>
                    <div class="col-sm-7">
                        <input value="{{ $fasilitas->gambar_fasilitas }}" class="form-control" type="text"
                            name="gambar_fasilitas" placeholder="gambar.jpg" required>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Nama Fasilitas</label>
                    <div class="col-sm-7">
                        <input value="{{ $fasilitas->nama_fasilitas }}" class="form-control" type="text"
                            name="nama_fasilitas" placeholder="toilet" required>
                    </div>
                    <label class="col-sm-3 col-form-label mb-3">Status Fasilitas</label>
                    <div class="col-sm-7">
                        <input value="{{ $fasilitas->status_fasilitas }}" class="form-control" type="text"
                            name="status_fasilitas" placeholder="status" required>
                    </div>
                    <label class="col-sm-3 col-form-lable mb-5">Deskripsi</label>
                    <div class="col-sm-7">
                        <input value="{{ $fasilitas->deskripsi_fasilitas }}" class="form-control" type="text"
                            name="deskripsi_fasilitas" placeholder="deskripsi">
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <a class="btn btn-primary" href="{{ url('fasilitas') }}">Kembali</a>
                    <button class="btn btn-success" type="submit">Perbaharui</button>
                </div>
            </form>
        </div>
        <div class="my_card w-50">
            <p class="text-center" style="color: red; font-size: 24px;">Perhatian</p>
            <p style="line-height: 1.8">Tata cara pengisian untuk menambahkan fasilitas baru :
                <br> 1. Petugas harus memasukkan gambar yang ada pada inputan text pertama gambar bisa di cari di google
                atau bisa di upload
                <br> 2. Petugas harus memasukkan nama dari fasilitas yang tertera pada inputsn text yang kedua
                <br> 3. Petugas harus mengecek apakah fasilitas tersebut aktif atau tidak, jika tidak tuliskan keterangan
                <br> 4. Petugas harus mengisi deskripsi dari setiap fasilitas baru atau yang sudah ada deskripsi tersebut
                harus menarik dan dapat mendatangkan para pembaca yang berkunjung di ultimasea water park
            </p>
        </div>
    </div>
@endsection
