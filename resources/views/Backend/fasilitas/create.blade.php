@extends('adminlte::page')
@extends('css.card')

@section('content')
    <div class="d-flex flex-row justify-content-between">
        <p class="btn btn-primary mt-3">Halaman Tambah Fasilitas</p>
    </div>
    <div class="d-flex flex-sm-row flex-column gap-4">
        <div class="my_card align-self-baseline">
            <form method="POST" action="{{ url('fasilitas') }}">
                <div class="form-group">
                    @csrf
                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-label" style="width: 150px">Gambar Fasilitas</label>
                        <div class="w-100">
                            <input class="form-control" type="text" name="gambar_fasilitas" placeholder="gambar.jpg"
                                required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-label" style="width: 150px">Nama Fasilitas</label>
                        <div class="w-100">
                            <input class="form-control" type="text" name="nama_fasilitas" placeholder="toilet" required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-label" style="width: 150px">Status Fasilitas</label>
                        <div class="w-100">
                            <input class="form-control" type="text" name="status_fasilitas" placeholder="status"
                                required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex flex-sm-row flex-column align-items-start align-items-sm-center h-auto gap-2">
                        <label class="form-label" style="width: 150px">Deskripsi</label>
                        <div class="w-100">
                            <input class="form-control" type="text" name="deskripsi_fasilitas" placeholder="deskripsi">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-sm-row flex-column gap-2 justify-content-between">
                    <a class="btn btn-primary" href="{{ url('fasilitas') }}">Kembali</a>
                    <button class="btn btn-success" type="submit">Tambahkan</button>
                </div>
            </form>
        </div>
        <div class="my_card align-self-baseline">
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
